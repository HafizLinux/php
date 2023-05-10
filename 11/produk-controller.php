<?php

    include 'connection.php';
    include 'Models/Produk.php';



    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $harga_beli = $_POST['harga_beli'];
    $harga_jual = $_POST['harga_jual'];
    $stok = $_POST['stok'];
    $min_stok = $_POST['min_stok'];
    $jenis_produk_id = $_POST['jenis_produk_id'];

    $data = [
        $kode,
        $nama,
        $harga_beli,
        $harga_jual,
        $stok,
        $min_stok,
        $jenis_produk_id
    ];
    
    
    $produk = new Produk();

    $id = $produk->simpan($data);
    echo "<script>document.location.href = 'index.php?url=produk' </script>";


?>