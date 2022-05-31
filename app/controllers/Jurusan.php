<?php 

    class Jurusan extends Controller {

        public function __construct() {
            $this->cekLogin();
        }

        public function index() {

            $data['jur'] = $this->model("Jurusan_model")->getJurusan();
            $data['title'] = "Jurusan";

            $this->view("templates/header", $data);
            $this->view("jurusan/index", $data);
            $this->view("templates/footer");
        }

        //tambah data
        public function tambah() {

            $data['title'] = "Tambah Data Jurusan";

            $this->view("templates/header", $data);
            $this->view("jurusan/tambah");
            $this->view("templates/footer");
        }

        public function prosesTambah() {

            if($this->model("Jurusan_model")->tambahJurusan($_POST) > 0) {
                Flasher::setFlash("Data Jurusan Berhasil Ditambah!!", "success");
                header("location:".BASE_URL);
                exit;
            } else {
                Flasher::setFlash("Data Jurusan Gagal Ditambah!!", "danger");
                header("location:".BASE_URL);
                exit;
            }
        }

        //hapus data
        public function hapus($id) {

            if($this->model("Jurusan_model")->hapusJurusan($id) > 0) {
                Flasher::setFlash("Data Jurusan Berhasil Dihapus!!", "success");
                header("location:".BASE_URL);
                exit;
            } else {
                Flasher::setFlash("Data Jurusan Gagal Dihapus!!", "danger");
                header("location:".BASE_URL);
                exit;
            }
        }
    }
?>