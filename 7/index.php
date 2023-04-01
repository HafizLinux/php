<?php

    abstract class Bentuk2D {
        abstract function namaBidang();
        abstract function luasBidang();
        abstract function kelilingBidang();
    }

    class Lingkaran extends Bentuk2D {
        private $jari2;

        public function __construct($jari2) {
            $this->jari2 = $jari2;
        }

        public function namaBidang() {
            return "Lingkaran";
        }

        public function luasBidang() {
            return pi() * pow($this->jari2, 2);
        }

        public function kelilingBidang() {
            return 2 * pi() * $this->jari2;
        }
    }

    class PersegiPanjang extends Bentuk2D {
        private $panjang;
        private $lebar;

        public function __construct($panjang, $lebar) {
            $this->panjang = $panjang;
            $this->lebar = $lebar;
        }

        public function namaBidang() {
            return "Persegi Panjang";
        }

        public function luasBidang() {
            return $this->panjang * $this->lebar;
        }

        public function kelilingBidang() {
            return 2 * ($this->panjang + $this->lebar);
        }
    }

    class Segitiga extends Bentuk2D {
        private $alas;
        private $tinggi;

        public function __construct($alas, $tinggi) {
            $this->alas = $alas;
            $this->tinggi = $tinggi;
        }

        public function namaBidang() {
            return "Segitiga";
        }

        public function luasBidang() {
            return 0.5 * $this->alas * $this->tinggi;
        }

        public function kelilingBidang() {
            return $this->alas + (2 * sqrt(pow($this->tinggi, 2) + pow(($this->alas / 2), 2)));
        }
    }



    $lingkaran = new Lingkaran(12); 
    $persegiPanjang = new PersegiPanjang(10, 6); 
    $segitiga = new Segitiga(20, 15); 
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 7</title>
</head>
<body>
    

<center>
    <b>
        <h1>PHP Bentuk 2D</h1>
    </b>
</center>

    <div style="margin: 40px 50px 0 50px;">
        <table cellpadding="10" border="1" width="100%">
            <tr>
                <th>No</th>
                <th>Nama Bidang</th>
                <th>Luas Bidang</th>
                <th>Keliling Bidang</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Persegi Panjang</td>
                <td><?= $persegiPanjang->luasBidang()?></td>
                <td><?= $persegiPanjang->kelilingBidang()?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Segitiga</td>
                <td><?= $segitiga->luasBidang()?></td>
                <td><?= $segitiga->kelilingBidang()?></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Lingkaran</td>
                <td><?= $lingkaran->luasBidang()?></td>
                <td><?= $lingkaran->kelilingBidang()?></td>
            </tr>
        </table>
    </div>



</body>
</html>