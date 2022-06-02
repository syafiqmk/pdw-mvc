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
        
        public function getMahasiswaByNim($nim) {
            $query = "SELECT * FROM mahasiswa m JOIN prodi p WHERE m.id_prodi = p.id_prodi AND m.nim = :nim ";
            $this->db->query($query);
            $this->db->bind(":nim", $nim);
            
            return $this->db->single();
        }

        public function getProdiByIdJur($id) {
            $query = "SELECT id_prodi, nama_prodi FROM prodi p WHERE p.id_jurusan = :id";
            $this->db->query($query);
            $this->db->bind(":id", $id);
            
            return $this->db->resultSet();
        }


        //tambah data
        public function tambahMahasiswa($data) {
            $query = "INSERT INTO mahasiswa VALUES(:nim, :nama, :tgl_lahir, :alamat, :agama, :kelamin, :no_hp, :email, :prodi)";
            $this->db->query($query);
            $this->db->bind(":nim", $data['nim']);
            $this->db->bind(":nama", $data['nama']);
            $this->db->bind(":tgl_lahir", $data['tgl_lahir']);
            $this->db->bind(":alamat", $data['alamat']);
            $this->db->bind(":agama", $data['agama']);
            $this->db->bind(":kelamin", $data['kelamin']);
            $this->db->bind(":no_hp", $data['no_hp']);
            $this->db->bind(":email", $data['email']);
            $this->db->bind(":prodi", $data['prodi']);
            $this->db->execute();

            return $this->db->rowCount();
        }

        //hpaus data
        public function hapusMahasiswa($nim) {
            $query = "DELETE FROM mahasiswa WHERE nim = :nim";
            $this->db->query($query);
            $this->db->bind(":nim", $nim);
            $this->db->execute();

            return $this->db->rowCount();
        }

        //edit data
        public function editMahasiswa($data) {
            $query = "UPDATE mahasiswa SET nim = :nim, nama = :nama, tgl_lahir = :tgl_lahir, alamat = :alamat, agama = :agama, kelamin = :kelamin, no_hp = :no_hp, email = :email, id_prodi = :prodi WHERE nim = :nimId";
            $this->db->query($query);
            $this->db->bind(":nim", $data['nim']);
            $this->db->bind(":nama", $data['nama']);
            $this->db->bind(":tgl_lahir", $data['tgl_lahir']);
            $this->db->bind(":alamat", $data['alamat']);
            $this->db->bind(":agama", $data['agama']);
            $this->db->bind(":kelamin", $data['kelamin']);
            $this->db->bind(":no_hp", $data['no_hp']);
            $this->db->bind(":email", $data['email']);
            $this->db->bind(":prodi", $data['prodi']);
            $this->db->bind(":nimId", $data['nimId']);
            $this->db->execute();

            return $this->db->rowCount();
        }
    }
?>