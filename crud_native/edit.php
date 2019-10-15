<html>
    <head>
        <title> </title>
    </head>
    <?php
    $id=$_GET['id'];
            require("koneksi.php");
            $query = mysqli_query($koneksi, "select * from peserta where id='$id'");
            $data=mysqli_fetch_assoc($query);
            $querh = mysqli_query($koneksi, "select * from hobi where peserta='$id'");
            foreach ($querh as $key => $value) {
                $data_hobi[$value['peserta']][] = $value['hobi'];
            }
            $tr=$data_hobi[$value['peserta']];
        ?>
    <body>
        <form method="POST">
           <table>
            <tr>
                <td>Nama : </td>
                <td><input type="text" name="nama" value="<?php echo $data['nama'] ?>"></td>
            </tr>
            <tr>
                <td>Gender : </td>
                <td>
                    <input type="radio" name="gender" value="L" <?php echo ($data['gender'] == 'L') ? 'checked' : '' ?>>Laki-Laki<br>
                    <input type="radio" name="gender" value="P" <?php echo ($data['gender'] == 'P') ? 'checked' : '' ?>>Perempuan  
                </td>
            </tr>
            <tr>
                <td>Alamat : </td>
                <td><textarea name="alamat" rows="3" ><?php echo $data['alamat'] ?></textarea></td>
            </tr>
            <tr>
                <td>N0. Telp : </td>
                <td><input type="text" name="nohp" value="<?php echo $data['nohp'] ?>"></td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><input type="text" name="email" value="<?php echo $data['email'] ?>"></td>
            </tr>
            <tr>
                <td>Hobi : </td>
                <td>
                    <input type="checkbox" name="hobi[]" value="Gaming" <?php if (in_array("Gaming", $tr)) { echo "checked"; }?>>Gaming<br>
                    <input type="checkbox" name="hobi[]" value="Mancing" <?php if (in_array("Mancing", $tr)) { echo "checked"; } ?>>Mancing<br>
                    <input type="checkbox" name="hobi[]" value="Coding" <?php if (in_array("Coding", $tr)) { echo "checked"; } ?>>Coding <br>
                    <input type="checkbox" name="hobi[]" value="Shoping" <?php if (in_array("Shoping", $tr)) { echo "checked"; } ?>>Shoping   
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Update"></td>
            </tr>
           </table>
        </form>
        <?php
            require("koneksi.php");
            if(@$_POST){
                $nama=@$_POST['nama'];
                $gender=@$_POST['gender'];
                $alamat=@$_POST['alamat'];
                $nohp=@$_POST['nohp'];
                $email=@$_POST['email'];
                $hobi=@$_POST['hobi'];

                $query=mysqli_query($koneksi, "UPDATE peserta SET `nama`='$nama',`gender`='$gender',`alamat`='$alamat',`nohp`='$nohp',`email`='$email' WHERE id='$id'");

                //DELETE HOBI
                $quer_del = mysqli_query($koneksi, "DELETE FROM hobi where peserta='$id'");
                 foreach ($hobi as $h) { 
                    $quer_hobi = mysqli_query($koneksi, "INSERT INTO hobi (`peserta`, `hobi`) VALUES ('$id','$h')");
                 }
                if($query){
                    header('Location: index.php');
                }
            }
        ?>
        
    </body>
</html>