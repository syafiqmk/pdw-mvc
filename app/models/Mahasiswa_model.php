<?php 

    class Mahasiswa_model {

        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getMahasiswa() {
            $query = "SELECT * FROM mahasiswa m JOIN prodi p WHERE m.id_prodi = p.id_prodi ";
            $this->db->query($query);
            
            return $this->db->resultSet();
        }

        public function getProdiByIdJur($id) {
            $query = "SELECT id_prodi, nama_prodi FROM prodi p WHERE p.id_jurusan = :id";
            $this->db->query($query);
            $this->db->bind(":id", $id);
            
            return $this->db->resultSet();
            // foreach($this->db->resultSet() as $row) {
            //     echo "<option>".$row['nama_prodi']."</option>";
            // };
        }
    }
?>