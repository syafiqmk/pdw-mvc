<h2 class="text-center">Edit Data Mahasiswa</h2>


<form action="<?= BASE_URL ?>/mahasiswa/prosesEdit" method="post" class="form-set" id="formEditMahasiswa">
    <input type="hidden" name="nimId" id="nim" value="<?= $data['maha']['nim'] ?>">
    <input type="hidden" id="idProd" value="<?= $data['idJur']['id_prodi'] ?>">
    <div class="mb-3">
        <label for="">Jurusan</label>
        <select name="jurusan" id="jurusanEdit" class="form-select" required>
            <option value="">---Jurusan----</option>
            <?php 
                foreach($data['jur'] as $jur) { ?>
                    <option value="<?= $jur['id_jurusan'] ?>" <?php if($data['idJur']['id_jurusan'] == $jur['id_jurusan']) echo "selected" ?>><?= $jur['nama_jurusan'] ?></option>
                <?php }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="">Prodi</label>
        <div id="test"></div>
        <select name="prodi" id="prodiEdit" class="form-select" required>
            <option id="prodOptE" value="[[id_prodi]]">---Prodi---</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="">NIM</label>
        <input type="number" id="nim" name="nim" value="<?= $data['maha']['nim'] ?>" class="form-control" autocomplete="off" placeholder="NIM" required>
    </div>
    <div class="mb-3">
        <label for="">Nama</label>
        <input type="text" name="nama" value="<?= $data['maha']['nama'] ?>" class="form-control" autocomplete="off" placeholder="Nama" required>
    </div>
    <div class="mb-3">
        <label for="">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" value="<?= $data['maha']['tgl_lahir'] ?>" class="form-control" autocomplete="off" required>
    </div>
    <div class="mb-3">
        <label for="">Alamat</label>
        <input type="text" name="alamat" value="<?= $data['maha']['alamat'] ?>" class="form-control" autocomplete="off" placeholder="Alamat" required>
    </div>
    <div class="mb-3">
        <label for="">Agama</label>
        <select name="agama" id="" class="form-select" required>
            <option value="1" <?php if($data['maha']['agama'] == 1) echo 'selected'; ?>>Islam</option>
            <option value="2" <?php if($data['maha']['agama'] == 2) echo 'selected'; ?>>Kristen</option>
            <option value="3" <?php if($data['maha']['agama'] == 3) echo 'selected'; ?>>Katolik</option>
            <option value="4" <?php if($data['maha']['agama'] == 4) echo 'selected'; ?>>Hindu</option>
            <option value="5" <?php if($data['maha']['agama'] == 5) echo 'selected'; ?>>Budha</option>
            <option value="6" <?php if($data['maha']['agama'] == 6) echo 'selected'; ?>>Konghucu</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="">Jenis Kelamin</label>
        <div class="form-check">
            <input type="radio" name="kelamin" value="1" class="form-check-input" <?php if($data['maha']['kelamin'] == 1) echo 'checked'; ?>>
            <label for="" class="form-check-label">Laki-laki</label>
        </div>
        <div class="form-check">
            <input type="radio" name="kelamin" value="2" class="form-check-input" <?php if($data['maha']['kelamin'] == 2) echo 'checked'; ?>>
            <label for="" class="form-check-label">Perempuan</label>
        </div>
    </div>
    <div class="mb-3">
        <label for="">No HP</label>
        <input type="number" name="no_hp" value="<?= $data['maha']['no_hp'] ?>" class="form-control" autocomplete="off" placeholder="No HP" required>
    </div>
    <div class="mb-3">
        <label for="">Email</label>
        <input type="email" name="email" value="<?= $data['maha']['email'] ?>" class="form-control" autocomplete="off" placeholder="Email@email.com" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= BASE_URL ?>/mahasiswa" class="btn btn-danger">Cancel</a>
    </div>
</form>