<?php
    $server = "localhost";
    $user   = "root";
    $pass   = "";
    $dba    = "training";
    
    $koneksi = mysqli_connect($server, $user, $pass, $dba);

    // if(mysqli_connect_errno()){
    //     echo  "Gagal";
    // }
    // else{
    //     echo "Berhasil";
    // }
?>