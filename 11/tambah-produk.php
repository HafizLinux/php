<?php
    include 'connection.php';
    include 'top.php';
    include 'menu.php';


?>

<?php

    $url = $_GET['url'];
    if($url == 'dashboard'){
        include_once 'dashboard.php';
    } else if (!empty($url)){
        include_once "$url.php";
    } else { 
        include_once 'dashboard.php';
    }


?>

<div id="layoutSidenav_content">
<main>
<div class="container px-4">
    <form method="POST" action="produk-controller.php">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="kode">Kode</label>
                    <input type="text" class="form-control" id="kode" name="kode" placeholder="Masukkan kode produk">
                </div>
                <div class="form-group mb-3">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama produk">
                </div>
                <div class="form-group mb-3">
                    <label for="harga_beli">Harga Beli</label>
                    <input type="number" class="form-control" id="harga_beli" name="harga_beli" placeholder="Masukkan harga beli">
                </div>
                <div class="form-group mb-3">
                    <label for="harga_jual">Harga Jual</label>
                    <input type="number" class="form-control" id="harga_jual" name="harga_jual" placeholder="Masukkan harga jual">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label for="stok">Stok</label>
                    <input type="number" class="form-control" id="stok" name="stok" placeholder="Masukkan stok">
                </div>
                <div class="form-group mb-3">
                    <label for="min_stok">Minimal Stok</label>
                    <input type="number" class="form-control" id="min_stok" name="min_stok" placeholder="Masukkan minimal stok">
                </div>
                <div class="form-group mb-3">
                    <label for="jenis_produk_id">Jenis Produk</label>
                    <select class="form-control" id="jenis_produk_id" name="jenis_produk_id">
                        <option value="">-- Pilih Jenis Produk --</option>
                        <option value="1">Elektronik</option>
                        <option value="2">Furniture</option>
                        <option value="3">Makanan</option>
                        <option value="4">Minuman</option>
                        <option value="5">Komputer</option>
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
</form>

</div>



<?php
    include 'bottom.php';
?>