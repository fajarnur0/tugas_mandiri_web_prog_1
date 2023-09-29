<?php
require 'koneksi.php';

if(isset ($_POST['submit'])) {
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $jurusan = $_POST['jurusan'];
    $fakultas = $_POST['fakultas'];

    $result = mysqli_query($conn, "INSERT INTO mahasiswa (`id`, `nama`, `npm`, `jurusan`, `fakultas`) VALUES ('', '$nama', '$npm', '$jurusan', '$fakultas')");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <style>
        form{
            display: flex;
            justify-content: center;
            margin-top: 60px;
        }

        table{
            border-collapse: collapse;
            border: 2px solid black;
        }

        th{
            border: 2px solid black;
            background-color: yellow;
        }

        td{
            padding: 15px;
            background-color: whitesmoke;
        }

        .button{
            border-top: 1px solid grey;
            text-align: center;
            padding: 15px;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <table>
            <tr>
                <th colspan="3"><h2>Tambah Data</h2></th>
            </tr>

            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>

            <tr>
                <td><label for="email">NPM:</label></td>
                <td>:</td>
                <td><input type="text" name="npm"></td>
            </tr>

            <tr>
                <td><label for="email">Jurusan:</label></td>
                <td>:</td>
                <td><input type="text" name="jurusan"></td>
            </tr>

            <tr>
                <td><label for="email">Fakultas:</label></td>
                <td>:</td>
                <td><input type="text" name="fakultas"></td>
            </tr>

            <tr>
                <td colspan="3" class="button">
                    <input type="submit" value="Simpan" name="submit">
                </td>
            </tr>
        </table>
    </form> 
</body>
</html>