<?php

    Class Produk{
        private $connection;

        public function __construct(){
            global $dbh;
            $this->connection = $dbh;
        }

        public function getAll() {
            $stmt = $this->connection->prepare("SELECT * FROM produk");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    
        
        public function simpan($data){
            $sql = "INSERT INTO produk VALUES (NULL, ?,?,?,?,?,?,?)";
            $stmt = $this->connection->prepare($sql);
            $result = $stmt->execute($data);
            echo "<script>alert('Tambah Data Sukses, kapan saya sukses?')</script>";
        }
        
        public function viewById($id) {
            $sql = "SELECT * FROM produk WHERE id = ?";
            $stmt = $this->db->prepare($sql);
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
    }



?>