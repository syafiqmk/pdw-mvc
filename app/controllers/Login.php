<?php 

    class Login extends Controller {

        public function __construct() {

            if($_SESSION["login"] == "login") {
                header("Location:".BASE_URL);
            }
        }

        public function index() {

            $data['title'] = "Halaman Login";

            $this->view("login/login", $data);
        }

        public function prosesLogin() {

            if($row = $this->model("Login_model")->cekLogin($_POST) > 0) {
                $_SESSION["user"] = $row["userid"];
                $_SESSION["nama"] = $row["nama"];
                $_SESSION["login"] = $row["login"];

                header("location:".BASE_URL);
            } else {
                Flasher::setFlash("Login Gagal!!", "danger");
                header("location:".BASE_URL."/login");
                exit;
            }
        }
    }
?>