<?php

//membuat class
class mahasiswa{
//menuliskan property
var $nim;
var $nama;
var $alamat;

function __construct() //construct adalah yang akan dibaca pertama kali
{
    echo "Saya Mahasiswa Teknik Informatika";
    echo "</br>";
}

function __destruct()
{
    echo "Politeknik Negeri Cilacap";
}

//method ada dua yaitu function dan prosedure
//method untuk menampilkan nama
function tampil_nama()
{
    return "Nama Saya adalah Yefta </br>";  //isi method
}

function tampil_mahasiswa()
{
    return " Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah </br>";
}

//method untuk menampilkan alamat
function tampil_alamat()
{
    //isi method
}

}
//membuat objek nama_mahasiswa
//membuat sebuah ojek baru yang merupakan instansiasi dari class mahasiswa
$nama_mahasiswa=new mahasiswa();

//Menampilkan objek ke layar
echo$nama_mahasiswa->tampil_nama();
echo$nama_mahasiswa->tampil_mahasiswa();
 