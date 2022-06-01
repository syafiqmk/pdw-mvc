<h2 class="text-center">Data Prodi</h2>

<!-- flasher -->
<div class="row">
    <div class="col-lg-12">
        <?php Flasher::flash() ?>
    </div>
</div>

<!-- button -->
<div class="text-center">
    <a href="<?= BASE_URL ?>" class="btn btn-primary">Tambah Data</a>
</div>


<!-- list data prodi -->
<table class="table">
    <thead>
        <th>No</th>
        <th>Prodi</th>
        <th>Jurusan</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php 
            $no = 1;
            foreach($data['prodi'] as $prod) { ?>

                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $prod['nama_prodi'] ?></td>
                    <td><?= $prod['nama_jurusan'] ?></td>
                    <td>
                        <a href="<?= BASE_URL ?>/prodi/edit/<?= $prod['id_prodi'] ?>" class="btn btn-primary">Edit</a>
                        <a href="<?= BASE_URL ?>/prodi/hapus/<?= $prod['id_prodi'] ?>" class="btn btn-danger" onclick="return confirm('Hapus Data Prodi?')">Hapus</a>
                    </td>
                </tr>

            <?php }
        ?>
    </tbody>
</table>