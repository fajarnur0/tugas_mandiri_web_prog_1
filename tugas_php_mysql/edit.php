<?php
require 'koneksi.php';

$notif = "";

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "SELECT * FROM mahasiswa WHERE `id` = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $nama = $row['nama'];
        $npm = $row['npm'];
        $jurusan = $row['jurusan'];
        $fakultas = $row['fakultas'];
    }
}

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $jurusan = $_POST['jurusan'];
    $fakultas = $_POST['fakultas'];

    $query = "UPDATE `mahasiswa` SET `nama` = '$nama', `npm` = '$npm', `jurusan` = '$jurusan', `fakultas` = '$fakultas' WHERE `id` = '$id'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $notif = "Data berhasil diperbarui";
    } else {
        $notif = "Gagal memperbarui data: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
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

        #notifikasi {
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <table>
            <tr>
                <th colspan="3"><h2>Edit Data</h2></th>
            </tr>

            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
            </tr>

            <tr>
                <td><label for="email">NPM:</label></td>
                <td>:</td>
                <td><input type="text" name="npm" value="<?php echo $npm; ?>"></td>
            </tr>

            <tr>
                <td><label for="email">Jurusan:</label></td>
                <td>:</td>
                <td><input type="text" name="jurusan" value="<?php echo $jurusan; ?>"></td>
            </tr>

            <tr>
                <td><label for="email">Fakultas:</label></td>
                <td>:</td>
                <td><input type="text" name="fakultas" value="<?php echo $fakultas; ?>"></td>
            </tr>

            <tr>
                <td colspan="3" class="button">
                    <input type="submit" value="Simpan" name="submit" id="submitButton">
                </td>
            </tr>

            <tr>
                <td id="notifikasi" colspan="3"><?php echo $notif?></td>
            </tr>
        </table>
    </form>
</body>

</html>