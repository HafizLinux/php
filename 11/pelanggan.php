<?php
    include 'Models/Pelanggan.php';
    include 'Models/Kartu.php';

    $pelanggan = New Pelanggan();
    $data_pelanggan = $pelanggan->getAll();

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
                        Data Pelanggan
                    </div>

                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Kode Pelanggan</th>
                                    <th>Nama</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Email</th>
                                    <th>Kartu ID</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Kode Pelanggan</th>
                                    <th>Nama</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Email</th>
                                    <th>Kartu ID</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php foreach($data_pelanggan as $row_pelanggan):?>
                                    <tr>
                                        <td><?= $row_pelanggan['kode']?></td>
                                        <td><?= $row_pelanggan['nama']?></td>
                                        <td><?= $row_pelanggan['tmp_lahir']?></td>
                                        <td><?= $row_pelanggan['tgl_lahir']?></td>
                                        <td><?= $row_pelanggan['jk']?></td>
                                        <td><?= $row_pelanggan['email']?></td>
                                        <td><?= $row_pelanggan['kartu_id']?></td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
