<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah jenis</title>
</head>
<body>
    <div class="container" > 
    <h1>tambah jenis baru</h1>
    <?php 
    $id_jenis=$_GET['id_jenis'];
    include '../../config/koneksi.php';
    $query=mysqli_query($conn, "SELECT * FROM jenis WHERE id_jenis= '$id_jenis'");
    $result=mysqli_fetch_array($query);
    ?>
    <form action="proses_edit.php?id_jenis=<?php echo $result ['id_jenis']?>" method="POST">
    <label for="exampleInputPassword1">Nama Jenis</label>
    <input type="text" class="form-control" id="exampleinputEmail" class="form-text" value="<?php
    echo $result ['nama_jenis']?>" name="nama_jenis">
        <button type="submit" class="btn btn-primary">submit</button>
    </form>
</div>
</body>
</html>
