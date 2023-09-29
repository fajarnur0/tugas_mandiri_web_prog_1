<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <style>
    table {
        border: 1px solid black;
        border-collapse: collapse;
    }

    td,
    th {
        border: 1px solid black;
        padding: 5px;
    }

    th {
        background-color: yellow;
    }

    .header {
        background-color: green;
    }
    </style>
</head>

<body>
    <?php 
    $nama = "Fajar Nurdiansyah";
    $npm = "227006077";
    $jurusan = "Informatika";
    $univ = "Universitas Siliwangi";
    $umur = 19;
    ?>

    <table>
        <tr id="header">
            <th colspan="2">Biodata</th>
        </tr>

        <tr>
            <th>Nama: </th>
            <td><?php echo $nama;?></td>
        </tr>
        <tr>
            <th>NPM: </th>
            <td><?php echo $npm;?></td>
        </tr>
        <tr>
            <th>Jurusan: </th>
            <td><?php echo $jurusan;?></td>
        </tr>
        <tr>
            <th>Universitas: </th>
            <td><?php echo $univ;?></td>
        </tr>
        <tr>
            <th>Umur: </th>
            <td><?php echo $umur . " Tahun";?></td>
        </tr>

    </table>
</body>

</html>