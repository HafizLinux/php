<?php
    if (isset($_POST['submit'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];

        $luasJg = $panjang * $lebar;
        $kelilingJg = 2 * ($panjang + $lebar);

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Rumus Bangun datar jajargenjang</title>
</head>
<body>
<style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.5;
            background-color: #f7f7f7;
        }
        h1 {
            text-align: center;
            margin: 40px 0;
        }
        form {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 3px;
        }
        button[type="submit"] {
            display: block;
            width: 100%;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #3e8e41;
        }
        @media screen and (max-width: 480px) {
            form {
                padding: 20px;
            }
            input[type="text"], button[type="submit"] {
                font-size: 14px;
            }
        }
    </style>
    <h1>Bangun Datar jajargenjang</h1>

    <form action="" method="POST">
        <table>
            <tr>
                <td>Panjang</td>
                <td>
                    <input type="text" name="panjang" required>
                </td>
            </tr>
            <tr>
                <td>Lebar</td>
                <td>
                    <input type="text" name="lebar" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="submit">Hitung</button>
                </td>
            </tr>
            <tr>
                <td>Luas Jajar Genjang</td>
                <td>
                    <input type="text" value="<?= $luasJg ?>" readonly>
                </td>
            </tr>
            <tr>
                <td>Keliling Jajar Genjang</td>
                <td>
                    <input type="text" value="<?= $kelilingJg ?>" readonly>
                </td>
            </tr>
        </table>
    </form>

</body>
</html>
