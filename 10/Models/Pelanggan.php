<?php

    Class Pelanggan{
        private $connection;

        public function __construct(){
            global $dbh;
            $this->connection = $dbh;
        }

        public function getAll() {
            $stmt = $this->connection->prepare("SELECT * FROM pelanggan");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
    }


?>