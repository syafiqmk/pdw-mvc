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

        public function getProdiById($id) {
            $query = "SELECT * FROM prodi p JOIN Jurusan j WHERE p.id_jurusan = j.id_jurusan AND p.id_prodi = :id ";
            $this->db->query($query);
            $this->db->bind(":id", $id);

            return $this->db->single();
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

        //hapus data
        public function hapusProdi($id) {
            $query = "DELETE FROM prodi WHERE id_prodi = :id ";
            $this->db->query($query);
            $this->db->bind(":id", $id);
            $this->db->execute();

            return $this->db->rowCount();
        }

        //edti data
        public function editProdi($data) {
            $query = "UPDATE prodi SET nama_prodi = :nama, id_jurusan = :jurusan WHERE id_prodi = :prodi ";
            $this->db->query($query);
            $this->db->bind(":nama", $data['nama']);
            $this->db->bind(":jurusan", $data['jurusan']);
            $this->db->bind(":prodi", $data['prodi']);
            $this->db->execute();

            return $this->db->rowCount();
        }
    }
?>