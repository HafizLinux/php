<?php 

    if (!isset($_POST['save']) > 0) {
        echo "<script>document.location.href = 'index.php'</script>";
    }

    $test = $_POST;


    function kategoriSkill($jumlah) {
        if($jumlah == 0) {
            return "Tidak Memadai";
        } else if($jumlah > 0  && $jumlah <= 40) {
            return "Kurang";
        } else if($jumlah > 40  && $jumlah <= 60) {
            return "Cukup";
        } else if($jumlah > 60  && $jumlah <= 100) {
            return "Baik";
        } else if($jumlah > 100  && $jumlah <= 200) {
            return "Sangat Baik";
        } else {
            return "Not Index";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result - PHP 5</title>
</head>
<body>
    

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            text-align: left;
            background-color: #f2f2f2;
            font-size: 24px;
            font-weight: bold;
        }

        td:first-child {
            width: 150px;
        }

        td:last-child {
            text-align: right;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .skill {
            display: flex;
            flex-wrap: wrap;
        }

        .skill label {
            margin-right: 16px;
        }

        @media (max-width: 768px) {
            td:first-child {
                width: 120px;
        }
        
        td:last-child {
            text-align: left;
            padding-top: 16px;
        }
        
        th {
            font-size: 20px;
        }
        
        .skill {
            flex-direction: column;
        }
        
        .skill label {
            margin-right: 0;
            margin-bottom: 8px;
        }
        }

    </style>

    <center>
        <h1>
            <b>Result</b>
        </h1>
    </center>

    <table>
        <tr>
            <th>NIM</th>
            <td><?= $test['nim']?></td>
        </tr>
        <tr>
            <th>Nama</th>
            <td><?= $test['nama']?></td>
        </tr>
        <tr>
            <th>Jenis Kelamin</th>
            <td><?= $test['jk']?></td>
        </tr>
        <tr>
            <th>Program Studi</th>
            <td><?= $test['prodi']?></td>
        </tr>
        <tr>
            <th>Skill</th>
            <td>
                <?= 
                    implode(', ', array_map(function($view) { 
                        $ex1 = explode('-', $view); 
                        return $ex1[0];
                    }, $test['skill'])); 
                ?>
            </td>
        </tr>
        <tr>
            <th>Skor Skill</th>
            <td>
                <?php $jumlah = 0; foreach($test['skill'] as $view):?>
                    <?php $ex = explode('-', $view); ?>
                    <?php $jumlah += (int) $ex[1];?>
                <?php endforeach;?>

                <?= $jumlah;?>
            </td>
        </tr>
        <tr>
            <th>Kategori Skill</th>
            <td><?= kategoriSkill($jumlah);?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= $test['email']?></td>
        </tr>
    </table>


</body>
</html>