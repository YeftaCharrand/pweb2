<?php

//membuat class
class dosen{
//menuliskan property
var $nidn;
var $nama;
var $prodi;

function tampil_nama() 
{
    return "nidn Saya adalah 220202024 </br>
            nama Saya adalah Yefta  </br>
            prodi saya adalah Teknik Informastika";  //isi method
}


}
//membuat objek nama_mahasiswa
//membuat sebuah ojek baru yang merupakan instansiasi dari class mahasiswa
$nama_dosen=new dosen();

//Menampilkan ibjek ke layar
echo$nama_dosen->tampil_nama();