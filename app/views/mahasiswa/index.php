<h2 class="text-center">Data Mahasiswa</h2>

<!-- flasher -->
<div class="row">
    <div class="col-lg-12">
        <?php Flasher::flash() ?>
    </div>
</div>

<!-- button list -->
<div class="text-center">
    <a href="<?= BASE_URL ?>/mahasiswa/tambah" class="btn btn-primary">Tambah</a>
</div>

<!-- list data mahasiswa -->
<table class="table">
    <thead>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php 
            $no = 1;
            foreach($data['maha'] as $maha) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $maha['nim'] ?></td>
                    <td><?= $maha['nama'] ?></td>
                    <td><?= $maha['nama_prodi'] ?></td>
                    <td>
                        <a href="<?= BASE_URL ?>/mahasiswa/detail/<?= $maha['nim'] ?>" class="btn btn-success">Detail</a>
                        <a href="<?= BASE_URL ?>/mahasiswa/edit/<?= $maha['nim'] ?>" class="btn btn-primary">Edit</a>
                        <a href="<?= BASE_URL ?>/mahasiswa/hapus/<?= $maha['nim'] ?>" class="btn btn-danger" onclick="return confirm('Hapus Data Mahasiswa?')">Hapus</a>
                    </td>
                </tr>
            <?php }
        ?>
    </tbody>
</table>