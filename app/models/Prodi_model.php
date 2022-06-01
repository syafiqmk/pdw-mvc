<?php 

    class Prodi_model {

        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getProdi() {
            $query = "SELECT * FROM prodi p JOIN Jurusan j WHERE p.id_jurusan = j.id_jurusan ";
            $this->db->query($query);
            
            return $this->db->resultSet();
        }

        //tambah data
        public function tambahProdi($data) {
            $query = "INSERT INTO prodi VALUES('', :nama, :jurusan)";
            $this->db->query($query);
            $this->db->bind(":nama", $data['nama']);
            $this->db->bind(":jurusan", $data['jurusan']);
            $this->db->execute();

            return $this->db->rowCount();
        }
    }
?>