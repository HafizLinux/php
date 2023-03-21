<?php
    if (isset($_POST['submit'])) {
        $sisi1 = $_POST['sisi1'];
        $sisi2 = $_POST['sisi2'];

        $luasPersegi = $sisi1 * $sisi2;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Rumus Bangun datar persegi</title>
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
    <h1>Bangun Datar Persegi</h1>

    <form action="" method="POST">
        <table>
            <tr>
                <td>Sisi 1</td>
                <td>
                    <input type="text" name="sisi1" required>
                </td>
            </tr>
            <tr>
                <td>Sisi 2</td>
                <td>
                    <input type="text" name="sisi2" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" name="submit">Hitung</button>
                </td>
            </tr>
            <tr>
                <td>Hasil</td>
                <td>
                    <input type="text" value="<?= $luasPersegi ?>" readonly>
                </td>
            </tr>
        </table>
    </form>

</body>
</html>
