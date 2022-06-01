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

        //hapus data
        public function hapus($id) {

            if($this->model("Prodi_model")->hapusProdi($id) > 0) {
                Flasher::setFlash("Data Prodi Berhasil Dihapus!!", "success");
                header("Location:".BASE_URL."/prodi");
                exit;
            } else {
                Flasher::setFlash("Data Prodi Gagal Dihapus!!", "danger");
                header("Location:".BASE_URL."/prodi");
                exit;
            }
        }

        //edut data
        public function edit($id) {

            $data['jur'] = $this->model("Jurusan_model")->getJurusan();
            $data['prodi'] = $this->model("Prodi_model")->getProdiById($id);
            $data['title'] = "Edit Prodi";

            $this->view("templates/header", $data);
            $this->view("prodi/edit", $data);
            $this->view("templates/footer");
        }

        public function prosesEdit() {

            if($this->model("Prodi_model")->editProdi($_POST) > 0) {
                Flasher::setFlash("Data Prodi Berhasil Diedit", "success");
                header("Location:".BASE_URL."/prodi");
                exit;
            } else {
                Flasher::setFlash("Data Prodi Gagal Diedit", "danger");
                header("Location:".BASE_URL."/prodi");
                exit;
            }
        }
    }
?>