<?php

//membuat class
class mahasiswa{
//menuliskan property
var $nim;
var $nama;
var $alamat;


//method ada dua yaitu function dan prosedure
//method untuk menampilkan nama
function tampil_nama()
{
    return "Nama Saya adalah Yefta";  //isi method
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
 