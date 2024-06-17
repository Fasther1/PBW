<?php
    include_once ("./connect.php");

    $query = mysqli_query($db,"SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar buku</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Daftar Buku</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Judul</th>
            <th>Isbn</th>
            <th>Unit</th>
            <th>Action</th>
            <th>Action</th>

        </tr>
    <?php foreach ($query as $buku) { ?>
        <tr>
            <td><?php echo $buku['id'];?></td>
            <td><?php echo $buku['judul'];?></td>
            <td><?php echo $buku['isbn'];?></td>
            <td><?php echo $buku['unit'];?></td>
            <td><a href=<?php echo "edit-buku.php?id=" . $buku["id"]?>>EDIT</a></td>
            <td><a href=<?php echo "delete-buku.php?id=" . $buku["id"]?>>HAPUS</a></td>


        </tr>
    <?php } ?>

    <br>
        <a href="./tambah-buku.php">Tambah Buku</a>

    <br>



    <a href="./index.php">Back</a>
</body>
</html>