<?php 

    class Jurusan_model {

        private $table = "jurusan";
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getJurusan() {

            $query = "SELECT * FROM ".$this->table;
            $this->db->query($query);
            
            return $this->db->resultSet();
        }
    }
?>