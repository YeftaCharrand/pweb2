<?php
include '../classes/database.php';

session_start();
// session_destroy();
// echo $_SESSION['eksekusi'];



$db=new database();

$aksi = $_GET['aksi'];
if ($aksi=="tambah"){
    $_SESSION['eksekusi'] = " Data Berhasil Ditambahkan";
    $db->tambah_mhs($_POST['nim'], $_POST['Nama'], $_POST['Alamat']);
    header ("location:tampil_mhs.php");
}elseif($aksi=="update"){
    $_SESSION['eksekusi'] = "Data Berhasil di Edit";
    $db->update($_POST['id'], $_POST['nim'], $_POST['Nama'], $_POST['Alamat']);
    header ("location:tampil_mhs.php");
}elseif($aksi=="hapus"){
    $_SESSION['eksekusi'] = "Data Berhasil di Hapus";
    $db->hapus($_GET['id']);
    header ("location:tampil_mhs.php");
}

?>