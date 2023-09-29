<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi</title>
    <style>
        div{
            display: flex;
            justify-content: center;
            margin-top: 75px;
        }

        table{
            width: 500px;
            border: 2px solid black;
            border-collapse: collapse;
            box-shadow: 5px 10px 8px 3px #888888;
        }

        th{
            background-color: lightblue;
        }

        h1{
            font-size: 25px;
        }

        .topBorder{
            border-top: 2px solid black ;
        }

        td{
            background-color: lightgray;
            padding: 12px;
        }

        #button{
            
            text-align: center;
            border: 1px solid whitesmoke;
        }

        .submitButton{
            border: none;
            border-radius: 5px;
            width: 60px;
            background-color: green;
            padding: 8px;
            color: whitesmoke;
            font-weight: bold;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            margin-right: 10px;
            cursor: pointer;
        }

        .submitButton:hover{
            background-color: red;
        }

        .submitButton:active{
            background-color: orange;
        }
    
    </style>
</head>
<body>
    <div>
        <form action="hasil_transaksi.php" method="post">
            <table>
                <tr>
                    <th colspan="3"><h1>Toko Cat Guna Bangun Jaya</h1></th>
                </tr>
            
                <tr class="topBorder">
                    
                    <td>
                        <label>Nama Customer</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama">
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Alamat:</label>
                    </td>
                    <td class="titikDua">:</td>
                    <td>
                        <input type="text" name="alamat">    
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Jenis Cat:</label>
                    </td>
                    <td class="titikDua">:</td>
                    <td>
                        <select name="jenisCat">
                            <option value="Bituminous Paint">Bituminous Paint</option>
                            <option value="Chlorinated Rubber">Chlorinated Rubber</option>
                            <option value="Vinyl">Vinyl</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Warna Cat:</label>
                    </td>
                    <td class="titikDua">:</td>
                    <td>
                        <input type="radio" name="warnaCat" value="Merah">Merah
                        <input type="radio" name="warnaCat" value="Biru">Biru
                        <input type="radio" name="warnaCat" value="Kuning">Kuning
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Jumlah Beli:</label>
                    </td>
                    <td class="titikDua">:</td>
                    <td>
                        <input type="number" name="jumlahBeli">
                    </td>
                </tr>
                <tr>
                    <td id="button" colspan="3">
                        <input class="submitButton" type="submit" name="submit" value="Hitung">
                        <input class="submitButton" type="reset" name="reset" value="Batal">
                    </td>
                </tr>
            </table>
         </form>
    </div>
</body>
</html>