<?php

class database{

    var $host="localhost";
    var $username="root";
    var $password="";
    var $db="akademik";
    var $koneksi;

    function __construct()
    {
        $this->koneksi=mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }
    function tampil_mahasiswa()
    {
        $data=mysqli_query($this->koneksi, "select * from mahasiswa");
        while($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    // function tampil_mahasiswa_kebumen()
    // {
    //     $data=mysqli_query($this->koneksi, "select * from mahasiswa where alamat like '%Kebumen%'");
    //     while($d=mysqli_fetch_array($data)){
    //         $hasil[]=$d;
    //     }
    //     return $hasil;
    // }

     function tambah_mhs($nim, $Nama, $Alamat){

         mysqli_query($this->koneksi, "insert into mahasiswa (nim, Nama, Alamat) values ('$nim', '$Nama', '$Alamat')");
    }

    function edit($id)
    {
        $data= mysqli_query($this->koneksi, "select * from mahasiswa where id='$id'");
        while($d = mysqli_fetch_array($data)){
            $hasil[]=$d;    
        }
        return $hasil;
    }

    function update ($id, $nim , $Nama, $Alamat){
        mysqli_query($this->koneksi, "update mahasiswa set nim='$nim', nama='$Nama', alamat='$Alamat' where id='$id'");
    }

    function hapus($id){
        mysqli_query($this->koneksi,"delete from mahasiswa where id='$id'");
    }


    function tampil_dosen()
    {
        $data=mysqli_query($this->koneksi, "select * from dosen");
        while($d=mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
     function tambah_dosen($nidn, $Nama, $Alamat){
        //  mysqli_query($this->koneksi, "insert into dosen (id, nidn, nama, alamat) values ('', '$nidn', '$Nama', '$Alamat')");
        $sql = "INSERT INTO `dosen`(`nidn`, `Nama`, `Alamat`) VALUES ('$nidn','$Nama','$Alamat')";
        $this->koneksi->query($sql);
    }

    function edit_dosen($id)
    {
        $data= mysqli_query($this->koneksi, "select * from dosen where id='$id'");
        while($d = mysqli_fetch_array($data)){
            $hasil[]=$d;    
        }
        return $hasil;
    }

    function update_dosen ($id, $nidn , $Nama, $Alamat){
        mysqli_query($this->koneksi, "update dosen set nidn='$nidn', nama='$Nama', alamat='$Alamat' where id='$id'");
    }

    function hapus_dosen($id){
        mysqli_query($this->koneksi,"delete from dosen where id='$id'");
    }
}
