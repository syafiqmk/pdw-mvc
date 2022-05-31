<?php 

    class Jurusan extends Controller {

        public function __construct() {
            $this->cekLogin();
        }

        public function index() {

            $data['jur'] = $this->model("Jurusan_model")->getJurusan();
            $data['title'] = "Jurusan";

            $this->view("templates/header", $data);
            // $this->view("templates/header", $data);
            $this->view("templates/footer");
        }
    }
?>