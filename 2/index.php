<?php
    // // input data pegawai
    // $nama = "John Doe";
    // $jabatan = "Manager";
    // $gaji_pokok = 0;
    // $tunjangan_jabatan = 0;
    // $tunjangan_keluarga = 0;
    // $gaji_kotor = 0;
    // $zakat_profesi = 0;
    // $take_home_pay = 0;
    // $status = "menikah";
    // $jml_anak = 3;

    if (isset($_POST['submit'])) {

        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $status = $_POST['status'];



        // hitung gaji pokok
        switch ($jabatan) {
            case "Manager":
                $gaji_pokok = 20000000;
                break;
            case "Asisten":
                $gaji_pokok = 15000000;
                break;
            case "Kabag":
                $gaji_pokok = 10000000;
                break;
            case "Staff":
                $gaji_pokok = 4000000;
                break;
            default:
                $gaji_pokok = 0;
        }

        // hitung tunjangan jabatan
        $tunjangan_jabatan = 0.2 * $gaji_pokok;

        if ($status = 1 && $jml_anak < 3) {
            $tunjangan_keluarga = 0.05 * $gaji_pokok;
        }else if ($status = 2 && $jml_anak > 2){
            $tunjangan_keluarga = 0.1 * $gaji_pokok;
        }else{
            $tunjangan_keluarga = 0;
        }


        // hitung gaji kotor
        $gaji_kotor = $gaji_pokok + $tunjangan_jabatan + $tunjangan_keluarga;

        // hitung zakat profesi
        $muslim = true;
        $zakat_profesi = ($muslim && $gaji_kotor >= 6000000) ? 0.025 * $gaji_kotor : 0;

        // hitung take home pay
        $take_home_pay = $gaji_kotor - $zakat_profesi;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
        }

        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }


        input, select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        table{
            width: 100%;
        }
        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 10 6'%3E%3Cpath fill='%23aaa' d='M5 6L0 1h10z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 10px top 50%;
            background-size: 10px auto;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }

        @media screen and (max-width: 600px) {
            .container {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Gaji Pegawai</h1>
        <form action="" method="POST">
            <table cellpadding="10">
                <tr>
                    <td><b>Nama</b></td>
                    <td><input type="text" name="nama" required style="width: 100%";"></td>
                </tr>
                <tr>
                    <td><b>Jabatan</b></td>
                    <td>
                        <select name="jabatan">
                            <option value="Manager">Manager</option>
                            <option value="Asisten">Asisten</option>
                            <option value="Kabag">Kabag</option>
                            <option value="Staff">Staff</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><b>Status</b></td>
                    <td>
                        <select name="status">
                            <option value="1">Belum Menikah</option>
                            <option value="2">Menikah & 2 Anak/Kurang</option>
                            <option value="3">Menikah & 3 Anak/Lebih</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="Hitung"></td>
                </tr>
                <tr>
                    <th colspan="2">Hasil Perhitungan</th>
                </tr>
                <tr>
                    <td><b>Nama</b></td>
                    <td><input type="text" value="<?= $nama?>" readonly></td>
                </tr>
                <tr>
                    <td><b>Jabatan</b></td>
                    <td><input type="text" value="<?= $jabatan?>" readonly></td>
                </tr>
                <tr>
                    <td><b>Gaji Pokok</b></td>
                    <td><input type="text" value="Rp. <?= number_format($gaji_pokok, 2)?>" readonly></td>
                </tr>
                <tr>
                    <td><b>Tunjangan Jabatan</b></td>
                    <td><input type="text" value="Rp. <?= number_format($tunjangan_jabatan, 2)?>" readonly></td>
                </tr>
                <tr>
                    <td><b>Tunjangan Keluarga</b></td>
                    <td><input type="text" value="Rp. <?= number_format($tunjangan_keluarga, 2)?>" readonly></td>
                </tr>
                <tr>
                    <td><b>Gaji Kotor</b></td>
                    <td><input type="text" value="Rp. <?= number_format($gaji_kotor, 2)?>" readonly></td>
                </tr>
                <tr>
                    <td><b>Zakat Profesi</b></td>
                    <td><input type="text" value="Rp. <?= number_format($zakat_profesi, 2)?>" readonly></td>
                </tr>
                <tr>
                    <td><b>Take Home Pay</b></td>
                    <td><input type="text" value="Rp. <?= number_format($take_home_pay, 2)?>" readonly></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
