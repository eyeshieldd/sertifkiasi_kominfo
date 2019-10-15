<?php
    function nilai($a){
        $standar_nilai=70;
        $nilai_peserta = $a;

        if($nilai_peserta >= $standar_nilai){
            $nilai='LULUS';
        }
        else{
            $nilai='TIDAK LULUS';
        }

        return $nilai;
    }
?>