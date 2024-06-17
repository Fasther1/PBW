<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tambah Buku</title>
</head>
<body>
    <h1>Form Tambah Buku</h1>
    <form action="process.php" method="POST">
        <label for="id">ID Buku:</label>
        <input type="text" id="id" name="id" required><br><br>

        <label for="judul">Judul Buku:</label>
        <input type="text" id="judul" name="judul" required><br><br>

        <label for="isbn">ISBN:</label>
        <input type="text" id="isbn" name="isbn" required><br><br>

        <label for="unit">Unit:</label>
        <input type="number" id="unit" name="unit" required><br><br>

        <input type="submit" value="Simpan">
    </form>
</body>
</html>
