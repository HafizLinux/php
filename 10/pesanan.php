<?php
    include 'Models/Pesanan.php';


    $pesanan = New Pesanan();
    $data_pesanan = $pesanan->getAll();


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
                        <i class="fas fa-table me-1"></i>
                        Data Produk
                    </div>

                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Total</th>
                                    <th>ID Pelanggan</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Total</th>
                                    <th>ID Pelanggan</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach($data_pesanan as $row_pesanan):?>
                                    <tr>
                                        <td><?= $row_pesanan['tanggal']?></td>
                                        <td><?= $row_pesanan['total']?></td>
                                        <td><?= $row_pesanan['pelanggan_id']?></td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
