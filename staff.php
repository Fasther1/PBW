<?php
    include_once ("./connect.php");

    $query = mysqli_query($db,"SELECT * FROM staff");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar staff</title>
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
    <h1>Daftar Staff</h1>
    <table>
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Telp</th>
            <th>Email</th>
            <th>Action</th>
            <th>Action</th>

        </tr>
        <?php foreach ($query as $staff) { ?>
        <tr>
            <td><?php echo $staff['id'];?></td>
            <td><?php echo $staff['nama'];?></td>
            <td><?php echo $staff['telp'];?></td>
            <td><?php echo $staff['email'];?></td>
            <td><a href=<?php echo "edit-staff.php?id=" . $staff["id"]?>>EDIT</a></td>
            <td><a href=<?php echo "delete-staff.php?id=" . $staff["id"]?>>HAPUS</a></td>

        </tr>
    <?php } ?>
 <br>
 <a href="./tambah-staff.php">Tambah Staff</a>
 <br>



    <a href="./index.php">Back</a>
</body>
</html>