<?php

    Class Kartu{
        private $connection;

        public function __construct(){
            global $dbh;
            $this->connection = $dbh;
        }

        public function getAll() {
            $stmt = $this->connection->prepare("SELECT * FROM kartu");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
    }


?>