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
        </div>
