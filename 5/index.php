<?php 
    $ar_prodi = [   
                    "SI" => "Sistem Informasi",
                    "TI" => "Teknik Informatika", 
                    "IKOM" => "Ilmu Komputer",
                    "TE" => "Teknik Elektro"
                ];
    $ar_skill = [
                    "HTML" => 10,
                    "CSS" => 10,
                    "Javascript" => 20,
                    "RWD Bootstrap" => 20,
                    "PHP" => 30,
                    "Mysql" => 30,
                    "Laravel" => 40
                ];
    $domisili = [
                    "Jakarta",
                    "Bandung",
                    "Bekasi",
                    "Malang",
                    "Surabaya",
                    "Lainnya"
                ];

    $jenis_kelamin = [
                        "Laki-Laki",
                        "Perempuan"
                    ];

    if (isset($_POST['save'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $prodi = $_POST['prodi'];
        $skill = $_POST['skill'];
        $domisili = $_POST['domisili'];
        $email = $_POST['email'];
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP5</title>
</head>
<body>
    
    <style>
        body{
            background-color: #E5E5E5;
        }
        fieldset {
            grid-template-columns: 25% 50% 25%;
            background-color: beige;
            border: 1px solid #ccc;
        }

        fieldset input[type=text], fieldset select {
            width: 100%;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin: 0 auto;
            max-width: 800px;
            font-family: Arial, sans-serif;
            font-size: 16px;
            color: #333;
        }

        thead {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        th,td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        input[type="text"], input[type="email"], select {
            padding: 8px;
            width: 100%;
            border: none;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        select {
            background-color: #f2f2f2;
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>

    <fieldset>
        <legend>
            <h2>Form Registrasi Kelompok Belajar</h2>
        </legend>
        <table>
            <thead>
                <tr>
                    <th colspan="2"><h3>Form Registrasi</h3></th>
                </tr>
            </thead>
            <tbody>
                <form action="result.php" method="post">
                    <tr>
                        <td>Email</td>
                        <td><input type="email" required name="email"></td>
                    </tr>
                    <tr>
                        <td>NIM</td>
                        <td><input type="text" required name="nim"></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" required name="nama"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>
                            <select name="jk">
                                <?php foreach($jenis_kelamin as $jk_arr) :?>
                                    <option value="<?= $jk_arr?>"><?= $jk_arr?></option>
                                <?php endforeach;?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Program Studi</td>
                        <td>
                            <select name="prodi">
                                <?php foreach($ar_prodi as $prodi_arr => $val):?>
                                    <option value="<?= $val?>"><?= $prodi_arr?> - (<?= $val?>)</option>
                                <?php endforeach;?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Skill</td>
                        <td>
                            <?php foreach($ar_skill as $key => $value):?>
                                <input type="checkbox" name="skill[]" id="<?= $key?>" value="<?= $key ?> - <?= $value?>"><label for="<?= $key?>"><?= $key ?></label>
                            <?php endforeach;?>
                        </td>
                    </tr>
                    <tr>
                        <td>Domisili</td>
                        <td>
                            <select name="domisili">
                                <?php foreach($domisili as $view):?>
                                    <option value="<?= $view?>"><?= $view; ?></option>
                                <?php endforeach;?>
                            </select>
                        </td>
                    </tr>
                    <tfoot>
                        <tr>
                            <td></td>
                            <td><button type="submit" name="save">Submit</button></td>
                        </tr>
                    </tfoot>
                </form>
            </tbody>
        </table>
    </fieldset>


</body>
</html>