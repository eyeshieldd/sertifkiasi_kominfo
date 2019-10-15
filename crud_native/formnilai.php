<html>
    <head>
        <title> </title>
    </head>

    <body>
    <?php
    $id=$_GET['id'];
            require("koneksi.php");
            $query = mysqli_query($koneksi, "select * from peserta where id='$id'");
            $data=mysqli_fetch_assoc($query);

            $query_nilai=mysqli_query($koneksi, "select * from nilai where peserta='$id'");
            $nilai_lama = mysqli_fetch_assoc($query_nilai);
        ?>
        <form method="POST">
        <table>
            <tr>
                <td>Nama : </td>
                <td>
                    <?= $data['nama'] ?>
                </td>
            </tr>
            <tr>
                <td>Nilai : </td>
                <td>
                    <input type="number" name="nilai" value="<?= $nilai_lama['nilai'] ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Simpan">
                </td>
            </tr>        
        </table>
    </form>
    <a href="index.php">Kembali</a>
    <?php
    require("koneksi.php");
    if(@$_POST){
        $id_peserta = $_GET['id'];
        $nilai = $_POST['nilai'];

            $query = mysqli_query($koneksi, "update nilai set nilai='$nilai' where peserta='$id_peserta'");

        if($query){
            header('Location: index.php');
        }

    }
    ?>
        
    </body>
</html>