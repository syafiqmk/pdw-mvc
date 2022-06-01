<h2 class="text-center">Tambah Data Mahasiswa</h2>


<form action="<?= BASE_URL ?>/mahasiswa/prosesTambah" method="post" class="form-set" id="formTambahMahasiswa">
    <div class="mb-3">
        <label for="">Jurusan</label>
        <select name="jurusan" id="jurusan" class="form-select" required>
            <option value="">---Jurusan----</option>
            <?php 
                foreach($data['jur'] as $jur) { ?>
                    <option value="<?= $jur['id_jurusan'] ?>"><?= $jur['nama_jurusan'] ?></option>
                <?php }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="">Prodi</label>
        <div id="test"></div>
        <select name="prodi" id="prodi" class="form-select" required>
            <option id="prodOpt" value="[[id_prodi]]">---Prodi---</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="">NIM</label>
        <input type="number" id="nim" name="nim" class="form-control" autocomplete="off" placeholder="NIM" required>
    </div>
    <div class="mb-3">
        <label for="">Nama</label>
        <input type="text" name="nama" class="form-control" autocomplete="off" placeholder="Nama" required>
    </div>
    <div class="mb-3">
        <label for="">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" class="form-control" autocomplete="off" required>
    </div>
    <div class="mb-3">
        <label for="">Alamat</label>
        <input type="text" name="alamat" class="form-control" autocomplete="off" placeholder="Alamat" required>
    </div>
    <div class="mb-3">
        <label for="">Agama</label>
        <select name="agama" id="" class="form-select" required>
            <option value="1">Islam</option>
            <option value="2">Kristen</option>
            <option value="3">Katolik</option>
            <option value="4">Hindu</option>
            <option value="5">Budha</option>
            <option value="6">Konghucu</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="">Jenis Kelamin</label>
        <div class="form-check">
            <input type="radio" name="kelamin" value="1" class="form-check-input">
            <label for="" class="form-check-label">Laki-laki</label>
        </div>
        <div class="form-check">
            <input type="radio" name="kelamin" value="2" class="form-check-input">
            <label for="" class="form-check-label">Perempuan</label>
        </div>
    </div>
    <div class="mb-3">
        <label for="">No HP</label>
        <input type="number" name="no_hp" class="form-control" autocomplete="off" placeholder="No HP" required>
    </div>
    <div class="mb-3">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Email@email.com" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Tambah</button>
        <a href="<?= BASE_URL ?>/mahasiswa" class="btn btn-danger">Cancel</a>
    </div>
</form>