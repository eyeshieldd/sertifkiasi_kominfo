<?php
/*
* File nilai.php
*/

/**
 * Class Fungsi_nilai
 * @package     Fungsi Database
 * @author      (RushEnd <syamsul.ajinugroho@gmail.com>)
 * @version     v.0.10.1 (dalam maintenance)
 */

class fungsi_delete
{
    /**
     * [ description]
     *@param [integer] $id [parameter id peserta yang di pilih]
     * @return  [boolean]  [mengembalikan nilai untuk mengecek keberhasilan query]
     */

    function simpan_data($id){
        require("koneksi.php");
        $query = mysqli_query($koneksi, "delete from peserta where id = '$id'");

        if($query){
            return TRUE;
        }
        else{
            return FALSE;
        }
}
}
?>