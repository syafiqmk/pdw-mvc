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
    }
?>