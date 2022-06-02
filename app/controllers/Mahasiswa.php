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

        //detail mahasiswa
        public function detail($nim) {

            $data['maha'] = $this->model("Mahasiswa_model")->getMahasiswaByNim($nim);
            $data['title'] = "Detail ".$data['maha']['nama'];

            $this->view("templates/header", $data);
            $this->view("mahasiswa/detail", $data);
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
            if($data > 0) {
                foreach($data as $row) {
                    echo "<option value='".$row['id_prodi']."'>".$row['nama_prodi']."</option>";
                }
            }
        }

        public function getProdiEdit($id, $idProd) {

            $data = $this->model("Mahasiswa_model")->getProdiByIdJur($id);
            
            foreach($data as $row) {
                if($row['id_prodi'] == $idProd) {
                    echo "<option value='".$row['id_prodi']."' selected>".$row['nama_prodi']."</option>";
                } else {
                    echo "<option value='".$row['id_prodi']."'>".$row['nama_prodi']."</option>";
                }
            }
        }

        public function prosesTambah() {

            if($this->model("Mahasiswa_model")->tambahMahasiswa($_POST) > 0) {
                Flasher::setFlash("Data Mahasiswa Berhasil Ditambah!!", "success");
                header("Location:".BASE_URL."/mahasiswa");
                exit;
            } else {
                Flasher::setFlash("Data Mahasiswa Gagal Ditambah!!", "danger");
                header("Location:".BASE_URL."/mahasiswa");
                exit;
            }
        }


        //hapus data
        public function hapus($nim) {
            if($this->model("Mahasiswa_model")->hapusMahasiswa($nim) > 0) {
                Flasher::setFlash("Data Mahasiswa Berhasil Dihapus", "success");
                header("Location:".BASE_URL."/mahasiswa");
                exit;
            } else {
                Flasher::setFlash("Data Mahasiswa Gagal Dihapus", "danger");
                header("Location:".BASE_URL."/mahasiswa");
                exit;
            }
        }

        //edit data
        public function edit($nim) {

            $data['jur'] = $this->model("Jurusan_model")->getJurusan();
            $data['maha'] = $this->model("Mahasiswa_model")->getMahasiswaByNim($nim);
            $data['idJur'] = $this->model("Prodi_model")->getProdiById($data['maha']['id_prodi']);
            $data['title'] = "Edit ".$data['maha']['nama'];

            $this->view("templates/header", $data);
            $this->view("mahasiswa/edit", $data);
            $this->view("templates/footer");
        }

        public function prosesEdit() {
            var_dump($_POST);

            if($this->model("Mahasiswa_model")->editMahasiswa($_POST) > 0) {
                Flasher::setFlash("Data Mahasiswa Berhasil Diedit!!", "success");
                header("Location:".BASE_URL."/mahasiswa");
                exit;
            } else {
                Flasher::setFlash("Data Mahasiswa Gagal Diedit!!", "danger");
                header("Location:".BASE_URL."/mahasiswa");
                exit;
            }
        }

    }
?>