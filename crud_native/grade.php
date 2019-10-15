<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <title> </title>
    </head>

    <body>
    <div class="form"></div>
        <form method="POST">
           <table>
            <tr>
                <td>Nama : </td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Gender : </td>
                <td>
                    <input type="radio" name="gender" value="L">Laki-Laki<br>
                    <input type="radio" name="gender" value="P">Perempuan  
                </td>
            </tr>
            <tr>
                <td>Alamat : </td>
                <td><textarea name="alamat" rows="3"></textarea></td>
            </tr>
            <tr>
                <td>N0. Telp : </td>
                <td><input type="text" name="nohp"></td>
            </tr>
            <tr>
                <td>Email : </td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Hobi : </td>
                <td>
                    <input type="checkbox" name="hobi[]" value="Gaming">Gaming<br>
                    <input type="checkbox" name="hobi[]" value="Mancing">Mancing<br>
                    <input type="checkbox" name="hobi[]" value="Coding">Coding <br>
                    <input type="checkbox" name="hobi[]" value="Shoping">Shoping   
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="SIMPAN"></td>
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

                $query=mysqli_query($koneksi, "INSERT INTO peserta (`nama`, `gender`, `alamat`, `nohp`, `email`) 
                                    VALUES ('$nama','$gender','$alamat','$nohp','$email')");
                $id=mysqli_insert_id($koneksi);

                 foreach ($hobi as $h) { 
                     $quer_hobi = mysqli_query($koneksi, "INSERT INTO hobi (`peserta`, `hobi`) VALUES ('$id','$h')");
                 }

                 $quer_nila = mysqli_query($koneksi, "INSERT INTO nilai (`peserta`, `nilai`) VALUES ('$id',0)");

            if($quer_hobi){
                header('Location: index.php');
            }
            // else{
            //     echo "Gagal";
            // }
        }
        ?>
    </body>
</html>