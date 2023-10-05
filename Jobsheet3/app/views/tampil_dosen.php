<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
    //memanggil class database
    include'../classes/database.php'; 
    //instansiasi class database
    $db = new database;
    ?>

    <h3>Data Dosen</h3>
    <a href="input_dosen.php" class="btn btn-info">Tambah Dosen</a>
    <table border="1" class="table table-bordered"> 
        <tr>
            <th>No</th>
            <th>NIDN</th>
            <th>Nama</th>
            <th>Alamat</th></th>
        </tr>
    <?php
    $no =1;
    foreach ($db->tampil_dosen() as $x){
        ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $x['nidn'] ?></td>
            <td><?php echo $x['Nama'] ?></td>
            <td><?php echo $x['Alamat'] ?></td>
            <td>

            <a href ="edit_dosen.php?id=<?php echo $x['id']; ?>&aksi=edit" class="btn btn-warning">Edit</a>
            <a href ="proses_dosen.php?id=<?php echo $x['id']; ?>&aksi=hapus" class="btn btn-danger">Hapus</a>
            </td>
        </tr>

        
    <?php
    }
    ?>
    </table>
</body>
</html>