<?php
    include 'Models/Kartu.php';


    $kartu = New Kartu();
    $data_kartu = $kartu->getAll();


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
                                    <th>Kode Produk</th>
                                    <th>Nama</th>
                                    <th>Diskon</th>
                                    <th>Iuran</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Kode Produk</th>
                                    <th>Nama</th>
                                    <th>Diskon</th>
                                    <th>Iuran</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach($data_kartu as $row_kartu):?>
                                    <tr>
                                        <td><?= $row_kartu['kode']?></td>
                                        <td><?= $row_kartu['nama']?></td>
                                        <td><?= $row_kartu['diskon']?></td>
                                        <td><?= $row_kartu['iuran']?></td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
