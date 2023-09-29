<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Transaksi</title>
    <style>
        div{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }

        fieldset{
            display: inline-block;
        }

        table{
            border-top: 1px dashed black;
            border-collapse: collapse;
            width: 425px;
        }

        td{
            padding: 2px;
        }

        .topBorder{
            border-top: 1px dashed black;
        }

        .bottomBorder{
            border-bottom: 1px dashed black;
        }
    </style>
</head>
<body>
    <?php 
        // deklarasi variabel dari form
        $namaCustomer = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jenisCat = $_POST['jenisCat'];
        $jumlahBeli = $_POST['jumlahBeli'];

        // penentuan harga berdasarkan jenis cat
        switch($jenisCat){
            case ("Bituminous Paint"):
                $harga = 20000;
                break;
            case ("Chlorinated Rubber"):
                $harga = 30000;
                break;
            case("Vinyl"):
                $harga = 40000;
                break;
            default:
                $harga = null;
                break;
        }

        // total harga 
        $totalHarga = $harga * $jumlahBeli;

        // pengkondisian untuk menghitung diskon
        if($jumlahBeli >= 5 && $jumlahBeli < 10) {
            $diskon = $totalHarga * 5/100;
        }elseif($jumlahBeli >= 10) {
            $diskon = $totalHarga * 10/100;
        }else{
            $diskon = 0;
        }

        // total bayar
        $totalBayar = $totalHarga - $diskon;

        
    ?>

    <!-- HTML -->
    <div>
        <fieldset>
            <legend>Struk Transaksi</legend>
            <table>
                <tr>
                    <th colspan="4"><h3>Toko Cat Guna Bangun Jaya</h3></th>
                </tr>
            
                <tr>
                    <td class="topBorder"><pre>Nama Customer</pre></td>
                    <td class="topBorder"><pre>:</pre></td>
                    <td class="topBorder" colspan="2"><pre><?php echo $namaCustomer; ?></pre></td>
                </tr>

                <tr>
                    <td><pre>Alamat</pre></td>
                    <td><pre>:</pre></td>
                    <td colspan="2"><pre><?php echo $alamat; ?></pre></td>
                </tr>

                <tr>
                    <td><pre>Jenis Cat</pre></td>
                    <td><pre>:</pre></td>
                    <td><pre><?php echo $jenisCat; ?></pre></td>
                </tr>

                <tr>
                    <td><pre>Warna</pre></td>
                    <td><pre>:</pre></td>
                    <td><pre><?php echo $_POST['warnaCat']; ?></pre></td>
                </tr>
                
                <tr>
                    <td><pre>Harga</pre></td>
                    <td><pre>:</pre></td>
                    <td><pre><?php echo $harga; ?></pre></td>
                </tr>
                <tr>
                    <td><pre>Jumlah Beli</pre></td>
                    <td><pre>:</pre></td>
                    <td><pre><?php echo $jumlahBeli; ?> </pre></td>
                    <td rowspan="2" style="padding-bottom: 5px;"><pre>(*)</pre></td>
                </tr>

                <tr>
                    <td class="topBorder"><pre>Total Harga</pre></td>
                    <td class="topBorder"><pre>:</pre></td>
                    <td class="topBorder"><pre><?php echo "Rp. " . $totalHarga; ?></pre></td>
                </tr>

                <tr>
                    <td><pre>Diskon</pre></td>
                    <td><pre>:</pre></td>
                    <td><pre><?php echo "Rp. " . $diskon; ?></pre></td>
                    <td class="bottomBorder" rowspan="2" style="padding-bottom: 21px;"><pre>(-)</pre></td>
                </tr>

                <tr>
                    <td class="topBorder bottomBorder"><pre>Total Bayar</pre></td>
                    <td class="topBorder bottomBorder"><pre>:</pre></td>
                    <td class="topBorder bottomBorder" style="padding: 10px;"><pre><?php echo "Rp. " . $totalBayar; ?></pre></td>
                </tr>
        
            </table>
            
        </fieldset>
    </div>
</body>
</html>