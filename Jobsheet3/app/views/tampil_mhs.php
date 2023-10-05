<?php
//memanggil class database
include '../classes/database.php';
session_start ();

//instansiasi classes database
$db = new database;
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>

  <div class="px-3 py-3">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SIAKAD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_dosen.php">Dosen</a>
        </li>
     
    </div>
  </div>
</nav>

<div class="px-5">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Data Mahasiswa</h3>
    <a class="btn btn-primary mb-2 mt-2" href="input_mhs.php">Tambah Mahasiswa</a>
    <?php
  if(isset($_SESSION['eksekusi'])) :
  ?>

    <div class="alert alert-warning alert-dismissible fade show" role="alert">
 
    <?php
    echo $_SESSION['eksekusi'];
    ?>
  
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php
session_destroy();
  endif;
?>
   
    <table class= "table">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>
    <?php
    $no=1;
    foreach($db->tampil_mahasiswa() as $x){
        ?>
   <tr>
    <td><?php echo $no++    ?></td>
    <td><?php echo $x['nim']   ?></td>
    <td><?php echo $x['Nama']    ?></td>
    <td><?php echo $x['Alamat']    ?></td>
    <td>
        <a class="btn btn-warning mb-2 mt-2" href="edit_mhs.php?id=<?php echo $x['id']; ?>&aksi=edit">Edit</a>
        <a class="btn btn-danger mb-2 mt-2" href="proses_mhs.php?id=<?php echo $x['id']; ?>&aksi=hapus">Hapus</a>
    </td>
   </tr>
   <?php
    }
   ?>
    
    </table>
</body>
</html>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>