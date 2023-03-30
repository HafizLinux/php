<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 6</title>
</head>
<body>
    <style>
		table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            text-align: center;
            padding: 8px;
        }
        th {
            background-color: #4286f4;
            color: white;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        tr:hover {background-color: #ddd;}
        td.green {background-color: #b9e9b9;}
        td.red {background-color: #ffb3b3;}
	</style>

    <center>
        <h1>
            <b>Data Laporan Gaji Pegawai</b>
        </h1>
        <p><small>By Hafiz</small></p>
    </center>
    
    <?php 
        require 'Pegawai.php';

        $pegawai1 = new Pegawai('P001', 'Hafiz', 'Manager', 'Islam', 'Menikah');
        $pegawai2 = new Pegawai('P002', 'Melissa', 'Asisten Manager', 'Islam', 'Menikah');
        $pegawai3 = new Pegawai('P003', 'Husen', 'Kepala Bagian', 'Katolik', 'Menikah');
        $pegawai4 = new Pegawai('P004', 'Andri', 'Staff', 'Kristen', 'Belum Menikah');
        $pegawai5 = new Pegawai('P005', 'Eko', 'Manager', 'Islam', 'Belum Menikah');

        $ar_pegawai = [$pegawai1, $pegawai2, $pegawai3, $pegawai4, $pegawai5];


        foreach($ar_pegawai as $pegawai){
            $pegawai->cetak();
            echo "<br>";
        }
    ?>
</body>
</html>