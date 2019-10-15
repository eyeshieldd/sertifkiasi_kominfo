<?php
/*
* File fugngsi_db.php
*/

/**
 * Class Fungsi_db
 * @package     Fungsi Database
 * @author      (RushEnd <syamsul.ajinugroho@gmail.com>)
 * @version     v.0.10.1 (dalam maintenance)
 */

class Fugnsi_db
{
    /**
     * [simpan_data ]
     * @param <string> <$nama> { parameter nama peserta }
     * @param <string> <$gender> { parameter pilihna gender peserta }
     * @param <string> <$alamat> { parameter alamat peserta }
     * @param <string> <$nohp> { parameter nama peserta }
     * @param <string> <$email> { parameter email peserta }
     * @param <string> <$hobi> { parameter pilihan hobi peserta }
     * @return [boolean] [ mengembalikan nilai untuk pengecekan keberhasilan query database
     */

function simpan_data($nama, $gender, $alamat, $nohp, $email, $hobi){


$query=mysqli_query($koneksi, "INSERT INTO peserta (`nama`, `gender`, `alamat`, `nohp`, `email`) 
VALUES ('$nama','$gender','$alamat','$nohp','$email')");
$id=mysqli_insert_id($koneksi);

foreach ($hobi as $h) {
$quer_hobi = mysqli_query($koneksi, "INSERT INTO hobi (`peserta`, `hobi`) VALUES ('$id','$h')");
}

$quer_nila = mysqli_query($koneksi, "INSERT INTO nilai (`peserta`, `nilai`) VALUES ('$id',0)");

    if($quer_hobi){
        return TRUE;
    }
        else{
            return FALSE;
        }
    }
}
?>