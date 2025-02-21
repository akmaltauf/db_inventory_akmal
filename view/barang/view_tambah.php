<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah kelas baru</title>
</head>
<body>
    <h1>tambah barang baru</h1>
    <form action="simpan.php" method="POST">
        <label for="">ID Barang</label>
        <input type="number" name="id_barang" class="form-control" id="exampleinputEmail" aria-describedy="emailHelp">
        <br>
        <label for="">Nama Barang</label>
        <input type="text" name="nama" class="form-control" id="exampleinputPassword1">
        <br>
        <label for="">Harga</label>
        <input type="number" name="harga" class="form-control" id="exampleinputPassword1">>
        <br>
        <label for="">Stok</label>
        <input type="number" name="stok" class="form-control" id="exampleinputPassword1">>
        <br>
        <label for="">ID jenis</label>
        <input type="number" name="id_jenis" class="form-control" id="exampleinputPassword1">>
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>
