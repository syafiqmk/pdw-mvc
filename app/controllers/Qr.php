<?php 

    class Qr extends Controller {

        public function __construct() {
            $this->cekLogin();
        }

        public function index() {

            $data['title'] = "QR Code Generator";

            $this->view("templates/header", $data);
            $this->view("qrcode/index");
            $this->view("templates/footer");
        }

    }
?>