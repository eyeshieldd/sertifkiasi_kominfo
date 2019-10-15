<?php
    require("koneksi.php");
    $id = $_GET['id'];

    $query_nilai = mysqli_query($koneksi, "delete from nilai where peserta = '$id'");
    $query_hobi = mysqli_query($koneksi, "delete from hobi where peserta = '$id'");
    $query = mysqli_query($koneksi, "delete from peserta where id = '$id'");

    if($query){
        header('Location: index.php');
    }
?>