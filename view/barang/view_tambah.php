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
        <input type="number" name="id_barang">
        <br>
        <label for="">Nama Barang</label>
        <input type="text" name="nama_barang">
        <br>
        <label for="">Harga</label>
        <input type="number" name="harga">
        <br>
        <label for="">Stok</label>
        <input type="number" name="stok">
        <br>
        <label for="">ID jenis</label>
        <input type="number" name="id_jenis">
        <br>
        <button type="submit">simpan</button>
    </form>
</body>
</html>
