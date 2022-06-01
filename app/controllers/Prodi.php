<?php 

    class Prodi extends Controller {

        public function __construct() {
            $this->cekLogin();
        }

        public function index() {

            $data['prodi'] = $this->model("Prodi_model")->getProdi();
            $data['title'] = "Prodi";

            $this->view("templates/header", $data);
            $this->view("prodi/index", $data);
            $this->view("templates/footer");
        }

        //tambah data
        public function tambah() {

            $data['jur'] = $this->model("Jurusan_model")->getJurusan();
            $data['title'] = "Tambah Prodi";

            $this->view("templates/header", $data);
            $this->view("prodi/tambah", $data);
            $this->view("templates/footer");
        }

        public function prosesTambah() {

            if($this->model("Prodi_model")->tambahProdi($_POST) > 0) {
                Flasher::setFlash("Data Prodi Berhasil Ditambah", "success");
                header("Location:".BASE_URL."/prodi");
                exit;
            } else {
                Flasher::setFlash("Data Prodi Gagal Ditambah", "danger");
                header("Location:".BASE_URL."/prodi");
                exit;
            }
        }
    }
?>