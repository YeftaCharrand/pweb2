<?php

//Pewarisan atau turunan atau inheritance, digunakan untuk mewarisi atau menrunkan class kedalam class yang lain, jadi ada istilah super class dan sub class

    class manusia
    {
        public $nama_saya;

        function panggil_nama($saya){
            $this->nama_saya = $saya;
        }
    }
//class turunan atau sub class dari class manusia
class mahasiswa extends manusia
{
    public $nama_mahasiswa;

    function panggil_mahasiswa($mahasiswa)
    {
        $this->nama_mahasiswa = $mahasiswa;
    }
}

//Instansiasi  class mahasiswa
$informatika=new mahasiswa();
$informatika->panggil_nama("Yefta Charrand Kusuma");
$informatika->panggil_mahasiswa("Putra");

//tampilkan isi dari property
echo "Nama Depan Saya : " .$informatika->nama_saya. "</br>";
echo "Nama Belakang : " .$informatika->nama_mahasiswa. "</br>";
?>