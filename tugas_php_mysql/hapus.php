<?php
require 'koneksi.php';
$id = $_GET["id"];
$result = mysqli_query($conn, "DELETE FROM mahasiswa WHERE `id` = '$id'" );
if($result){
    echo '<h3 style="display: flex; justify-content: center; margin-top: 200px;">Data Berhasil Dihapus.</h3>';
}
?>