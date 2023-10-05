<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <?php
 session_start();
 
?>
    <!-- bagian header -->
    <section class= "container">
    <div class="row justify-content-center">
        <div class= "col-12">
    <h3 class="text-center mb-3">Tambah Data Mahasiswa</h3>
        </div>
    </div>
<!-- bagian form -->
    <form action="proses_mhs.php?aksi=tambah" method="post">
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">NIM</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="" name="nim">
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="" name="Nama" >
    </div>
  </div>

  <div class="row mb-3">
    <label  class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
        <textarea class="form-control" id=" " name="Alamat" ></textarea>
    </div>
  </div>
  

  <button type="submit" class="btn btn-primary" value="simpan">Simpan</button>
</form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
    </section>
</html>