<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    <title>tambah jenis</title>
</head>
<body>
    <h1>tambah jenis baru</h1>
    <form action="simpan.php" method="POST">
        <label for="">ID Jenis</label>
        <input type="number" name="id_jenis">
        <br>
        <label for="">Nama Jenis</label>
        <input type="text" name="nama_jenis">
        <br>
        <button type="submit">simpan</button>
    </form>
</body>
</html>
