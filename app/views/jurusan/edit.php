<h2 class="text-center">Edit Data Jurusan</h2>

<form action="<?= BASE_URL; ?>/Jurusan/prosesEdit" method="post" class="form-set">
    <input type="hidden" name="id" value="<?= $data['jur']['id_jurusan']?>">
    <div class="mb-3">
        <label for="">Nama Jurusan</label>
        <input type="text" name="nama" class="form-control" value="<?= $data['jur']['nama_jurusan']?>" autocomplete="off" placeholder="Nama Jurusan" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= BASE_URL ?>" class="btn btn-danger">Cancel</a>
    </div>
</form>
