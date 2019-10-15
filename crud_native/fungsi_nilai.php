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

class Fungsi_nilai
{
    /**
     * [nilai]
     *
     * @param   [integer]  $a  [parameter nilai peserta]
     *
     * @return  [boolean]      [mengembalikan nilai untuk dinyatakan lulus atau tidak lulus]
     */
    function nilai($a){
        $standar_nilai=70;
        $nilai_peserta = $a;

        if($nilai_peserta >= $standar_nilai){
            $nilai=' dinyatakan LULUS';
        }
        else{
            $nilai=' dinyatakan TIDAK LULUS';
        }

        return $nilai;
    }
}
?>