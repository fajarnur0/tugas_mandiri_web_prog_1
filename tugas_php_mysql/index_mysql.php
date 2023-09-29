<?php 
require 'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM mahasiswa");


$mahasiswa = mysqli_fetch_all($result, MYSQLI_ASSOC);
// var_dump($mahasiswa);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        h1{
            text-align: center;
        }

        table{
            display: flex;
            justify-content: center;
            border-collapse: collapse;
        }

        th{
            border: 2px solid black;
            background-color: yellow;
        }

        td{
            border: 2px solid black;
            padding: 15px;
        }

        .button{
            display: inline-block;
            text-align: center;
            width: 100px;
            text-decoration: none;
            border: 2px solid green;
            padding: 5px;
            border-radius: 10px;
            color: white;
            background-color: green;
            font-weight: bold;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            cursor: pointer;
        }

        .button:hover{
            background-color: red;
            border: 2px solid red;
        }

        .button:active{
            background-color: orange;
            border: 2px solid orange;
        }
    </style>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table cellpadding="10" cellspacing="0">
        <tr>
            <td colspan="7" style="text-align: center; border:0;"><a href="tambah.php" class="button">Tambah Data</a></td>
        </tr>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Jurusan</th>
            <th>Fakultas</th>
            <th colspan="2">Aksi</th>
            
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $mhs):?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?= $mhs["nama"]; ?></td>
                <td><?= $mhs["npm"];?></td>
                <td><?= $mhs["jurusan"];?></td>
                <td><?= $mhs["fakultas"];?></td>
                <td><a href="hapus.php/?id=<?= $mhs["id"] ?>" class="button">Hapus</a></td>
                <td><a href="edit.php/?id=<?= $mhs["id"]?>" class="button">Edit</a></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach ?>
    </table>
</body>
</html>