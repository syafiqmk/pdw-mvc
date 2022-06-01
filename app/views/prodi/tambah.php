<h2 class="text-center">Tambah Data Prodi</h2>

<form action="<?= BASE_URL ?>/prodi/prosesTambah" method="post" class="form-set">
    <div class="mb-3">
        <label for="">Jurusan</label>
        <select name="jurusan" id="" class="form-select" required>
            <?php 
                foreach($data['jur'] as $jur) { ?>
                    <option value="<?= $jur['id_jurusan'] ?>"><?= $jur['nama_jurusan'] ?></option>
                <?php }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="">Nama Prodi</label>
        <input type="text" name="nama" class="form-control" autocomplete="off" placeholder="Nama Prodi" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Tambah</button>
        <a href="<?= BASE_URL ?>/prodi" class="btn btn-danger">Cancel</a>
    </div>
</form>