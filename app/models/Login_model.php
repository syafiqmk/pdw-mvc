<?php 

    class Login_model {

        private $table = "user";
        private $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function cekLogin($data) {
            $query = "SELECT * FROM user WHERE userid = :user AND passw = :pass";
            $this->db->query($query);
            $this->db->bind(":user", $data['user']);
            $this->db->bind(":pass", $data['pass']);
            $data = $this->db->single();

            return $data;
        }
    }
?>