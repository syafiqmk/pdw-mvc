<?php 

    class Jurusan_model {

        private $table = "jurusan";
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getJurusan() {

            $query = "SELECT * FROM ".$this->table." ORDER BY id_jurusan DESC";
            $this->db->query($query);
            
            return $this->db->resultSet();
        }

        public function getJurusanById($id) {
            $query = "SELECT * FROM ".$this->table." WHERE id_jurusan = :id";
            $this->db->query($query);
            $this->db->bind(":id", $id);
            
            return $this->db->single();
        }

        //tambah data
        public function tambahJurusan($data) {
            $query = "INSERT INTO ".$this->table." VALUES('', :nama)";
            $this->db->query($query);
            $this->db->bind(":nama", $data['nama']);
            $this->db->execute();

            return $this->db->rowCount();
        }

        //hapus data
        public function hapusJurusan($data) {
            $query = "DELETE FROM ".$this->table." WHERE id_jurusan = :id ";
            $this->db->query($query);
            $this->db->bind(":id", $data);
            $this->db->execute();

            return $this->db->rowCount();
        }

        //edit data
        public function editJurusan($data) {
            $query = "UPDATE ".$this->table." SET nama_jurusan = :nama WHERE id_jurusan = :id";
            $this->db->query($query);
            $this->db->bind(":nama", $data['nama']);
            $this->db->bind(":id", $data['id']);
            $this->db->execute();

            return $this->db->rowCount();
        }
    }
?>