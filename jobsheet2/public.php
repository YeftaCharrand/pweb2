<?php
//Encapsulasi adalah sebuah metode yang digunakan untuk mengatur struktur pada sebuah class dengan tujuan untuk menentukan hak akses, seperti siapa saja yang bisa mengakses class tersebut
//Membat class mahasiswa

class mahasiswa
{
    //property public dan private
    public $nama;
    //protected $nim;               
    //protected itu dia tidak bisa dipanggil diluar kelasnya tetapi bisa di panggil di turunan nya

    private $nim= "220202024";
 
    //public method
    public function tampilkan_nama()
    {
        //Nilai kembalian / return
        return "Nama Saya Yefta </br>";
    }

    // //membuat protected method
    // protected function tampilkan_nim()
    // {
    //     return " NIM saya 220202024";
    // }

    //membuat protected method
    function tampilkan_nim()
    {
        return " NIM saya ".$this->nim;
    }

}

//Membuat objek harus sudah keluar dari kurung kurawal class

//instansiasi objek mahasiswa kedalam variabel $mahasiswa
$mahasiswa = new mahasiswa();  //dibaca Kita membuat objeck baru yang kemudian di simpan di new mahasiswa

$nim = new mahasiswa();

//memanggil method tampilkan_nama
echo $mahasiswa->tampilkan_nama();
echo $nim->tampilkan_nim(); 

// Jadi sifatnya public adalah dia bisa dipanggil diluar class /dimanapun
// Jadi kalau kita ingin memanggil protected ,bisa dipanggil di luar class tetapi harus berada di dalam warisannya
// Jadi kalau private , dia hanya bisa dipanggil didalam class, pake this this
?>
