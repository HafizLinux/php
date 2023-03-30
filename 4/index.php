<?php 

    $m1 = ["NIM" => "10120235", "nama" => "Hafiz Herla Firmansyah", "nilai" => "95"];
    $m2 = ["NIM" => "1906373720", "nama" => "Hasnia", "nilai" => "85"];
    $mahasiswa = [$m1, $m2];
    $jdl = ['No', 'Nama', 'NIM', 'Nilai', 'Keterangan', 'Grade', 'Predikat'];
    $nilai_tertinggi = 0;
    $nilai_terendah = 100;
    $total_nilai = 0;

    $jumlah_mahasiswa = count($mahasiswa);

    foreach ($mahasiswa as $mhs) {
        $nilai = $mhs['nilai'];
        $total_nilai += $nilai;

        if ($nilai > $nilai_tertinggi) {
            $nilai_tertinggi = $nilai;
        }

        if ($nilai < $nilai_terendah) {
            $nilai_terendah = $nilai;
        }
    }

    $rata_rata = $total_nilai / $jumlah_mahasiswa;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP4</title>
</head>
<body>
    
    <style>
        body{
            background-color: #ADD8E6;
        }
        .container {
            margin: 20px auto;
            max-width: 800px;
            background-color: #F4F7FF;
            padding: 20px;
            border-radius: 10px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th {
            background-color: #235789;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        .table td {
            padding: 10px;
            text-align: center;
        }

        .table tr:nth-child(2n) {
            background-color: #f5f5f5;
        }

        .table tfoot td {
            background-color: #235789;
            color: #fff;
            text-align: center;
        }

        @media screen and (max-width: 768px) {
            .table {
                font-size: 14px;
            }
        }

    </style>

    <div class="container">
        <center>
            <h1>
                <b>TUGAS PHP 4</b>
            </h1>
            <p>
                <small>by Hafiz</small>
            </p>
        </center>
        <table class="table">
            <thead>

                <tr>
                    <?php foreach ($jdl as $valJdl) :?>
                        <th><?= $valJdl?></th>
                    <?php endforeach;?>
                </tr>

            </thead>

            <tbody>
                <?php $no = 1; 
                    foreach ($mahasiswa as $view) :
                    if ($view['nilai'] >= 85 && $view['nilai'] <= 100) {
                        $grade = 'A';
                    }
                    else if ($view['nilai'] >= 75 && $view['nilai'] <= 84) {
                        $grade = 'B';
                    }
                    else if ($view['nilai'] >= 60 && $view['nilai'] <= 74) {
                        $grade = 'C';
                    }
                    else if ($view['nilai'] >= 30 && $view['nilai'] <= 59) {
                        $grade = 'D';
                    }
                    else if ($view['nilai'] >= 0 && $view['nilai'] <= 29) {
                        $grade = 'E';
                    }else {
                        $grade = 'T';
                    }

                    switch ($view['nilai']) {
                        case ($view['nilai'] >= 85 && $view['nilai'] <= 100):
                            $predikat = 'Sangat Baik';
                            break;
                        case ($view['nilai'] >= 75 && $view['nilai'] <= 84):
                            $predikat = 'Baik';
                            break;
                        case ($view['nilai'] >= 60 && $view['nilai'] <= 74):
                            $predikat = 'Cukup';
                            break;
                        case ($view['nilai'] >= 30 && $view['nilai'] <= 59):
                            $predikat = 'Kurang';
                            break;
                        case ($view['nilai'] >= 0 && $view['nilai'] <= 29):
                            $predikat = 'Sangat Kurang';
                            break;
                        default:
                            $predikat = 'Tidak Terindex';
                            break;
                    }

                    $ket = ($view['nilai'] >= 60) ? 'Lulus' : 'Tidak Lulus';

                ?>
                    <tr>
                        <td><?= $no++;?></td>
                        <td><?= $view['NIM']?></td>
                        <td><?= $view['nama']?></td>
                        <td><?= $view['nilai']?></td>
                        <td><?= $ket?></td>
                        <td><?= $grade;?></td>
                        <td><?= $predikat;?></td>
                    </tr>
                
                <?php endforeach;?>
            </tbody>
            
            <tfoot>
                <tr>
                    <td colspan="3">Jumlah mahasiswa</td>
                    <td><?= $jumlah_mahasiswa ?></td>
                    <td>Nilai tertinggi</td>
                    <td><?= $nilai_tertinggi ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="3">Rata-rata</td>
                    <td><?= $rata_rata ?></td>
                    <td>Nilai terendah</td>
                    <td><?= $nilai_terendah ?></td>
                    <td></td>
                </tr>
            </tfoot>

        </table>
    </div>

</body>
</html>