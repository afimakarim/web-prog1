<?php
include "koneksi.php";

$konkesiObj = new Koneksi();
$koneksi = $konkesiObj->getKoneksi();

if($koneksi->connect_error) {
    echo "Gagal koneksi : " . $koneksi->connect_error;
}else {
    echo "Sambungan basis data berhasil";
}

$query = "delete from stock_barang where kode=" .$_GET["kode"];

if($koneksi->query($query) === true){
    echo "<br> Data kode" . $_GET["kode"] . "berhasil disimpan" . ' <a href="main.php">Lihat Data</a>';
}else {
    echo "<br> Data Gagal dihapus";
    }
        
$koneksi->close();
?>