<?php
    class manusia{
     protected $nama_saya="Yefta Charrand";

        function panggil_nama(){
            return "nama depan saya : {$this->nama_saya}";
        }
    }

    class mahasiswa extends manusia{
        private $nama_mahasiswa="Kusuma Putra";

        function panggil_mahasiswa(){
            return "nama belakang saya : {$this->nama_mahasiswa}";
        }
    }

    $informatika=new manusia();
    $informatika=new mahasiswa();

    $informatika->panggil_nama();
    $informatika->panggil_mahasiswa();

    echo  $informatika->panggil_nama(). "</br>";
    echo  $informatika->panggil_mahasiswa(). "</br>";
?>