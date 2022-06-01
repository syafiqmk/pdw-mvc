<h2 class="text-center">Edit Data Prodi</h2>

<form action="<?= BASE_URL ?>/prodi/prosesEdit" method="post" class="form-set">
    <input type="hidden" name="prodi" value="<?= $data['prodi']['id_prodi'] ?>">
    <div class="mb-3">
        <label for="">Jurusan</label>
        <select name="jurusan" id="" class="form-select" required>
            <?php 
                foreach($data['jur'] as $jur) { ?>
                    <option value="<?= $jur['id_jurusan'] ?>" <?php if($jur['id_jurusan'] == $data['prodi']['id_jurusan']) echo 'selected' ?>><?= $jur['nama_jurusan'] ?></option>
                <?php }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="">Nama Prodi</label>
        <input type="text" name="nama" class="form-control" autocomplete="off" placeholder="Nama Prodi" required value="<?= $data['prodi']['nama_prodi'] ?>">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="<?= BASE_URL ?>/prodi" class="btn btn-danger">Cancel</a>
    </div>
</form>

<?php var_dump($data)?>