<?php 

    class Mahasiswa extends Controller {

        public function __construct() {
            $this->cekLogin();
        }

        public function index() {

            $data['maha'] = $this->model("Mahasiswa_model")->getMahasiswa();
            $data['title'] = "Mahasiswa";

            $this->view("templates/header", $data);
            $this->view("mahasiswa/index", $data);
            $this->view("templates/footer");
        }

        //tambah data
        public function tambah() {

            $data['jur'] = $this->model("Jurusan_model")->getJurusan();
            $data['title'] = "Tambah Data Mahasiswa";

            $this->view("templates/header", $data);
            $this->view("mahasiswa/tambah", $data);
            $this->view("templates/footer");
        }

        public function getProdi($id) {

            $data = $this->model("Mahasiswa_model")->getProdiByIdJur($id);
            echo json_encode($data);
        }

    }
?>