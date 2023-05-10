<?php
    include 'Models/Produk.php';


    $produk = New Produk();
    $data_produk = $produk->getAll();


?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Selamat datang di halaman admin</h1>


            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Halaman Admin</li>
            </ol>


            <div class="mt-5">
                <div class="card">
                    <div class="card-header">
                        <a href="tambah-produk.php" class="btn btn-primary">Tambah</a>
                    </div>

                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Kode Produk</th>
                                    <th>Nama</th>
                                    <th>Harga Beli</th>
                                    <th>harga Jual</th>
                                    <th>Stok</th>
                                    <th>Minimal Stok</th>
                                    <th>ID Jenis Produk</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Kode Produk</th>
                                    <th>Nama</th>
                                    <th>Harga Beli</th>
                                    <th>harga Jual</th>
                                    <th>Stok</th>
                                    <th>Minimal Stok</th>
                                    <th>ID Jenis Produk</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach($data_produk as $row_produk):?>
                                    <tr>
                                        <td><?= $row_produk['kode']?></td>
                                        <td><?= $row_produk['nama']?></td>
                                        <td><?= $row_produk['harga_beli']?></td>
                                        <td><?= $row_produk['harga_jual']?></td>
                                        <td><?= $row_produk['stok']?></td>
                                        <td><?= $row_produk['min_stok']?></td>
                                        <td><?= $row_produk['jenis_produk_id']?></td>
                                        <td>
                                            <a href="view-produk.php?id=<?= $row_produk['kode']?>" class="btn btn-primary">View</a>
                                            <a href="update-produk.php?id=<?= $row_produk['kode']?>" class="btn btn-warning">Update</a>
                                            <a href="delete-produk.php?id=<?= $row_produk['kode']?>" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
