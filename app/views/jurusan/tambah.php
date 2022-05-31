<h2 class="text-center">Tambah Data Jurusan</h2>

<form action="<?= BASE_URL; ?>/Jurusan/prosesTambah" method="post" class="form-set">
    <div class="mb-3">
        <label for="">Nama Jurusan</label>
        <input type="text" name="nama" class="form-control" autocomplete="off" placeholder="Nama Jurusan" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Tambah</button>
        <a href="<?= BASE_URL ?>" class="btn btn-danger">Cancel</a>
    </div>
</form>
