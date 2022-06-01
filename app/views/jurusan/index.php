<h2 class="text-center">Data Jurusan</h2>

<!-- flasher -->
<div class="row">
    <div class="col-lg-12">
        <?php Flasher::flash()?>
    </div>
</div>

<!-- button -->
<div class="text-center">
    <a href="<?= BASE_URL ?>/jurusan/tambah" class="btn btn-primary">Tambah Data</a>
</div>

<!-- table data jurusan -->
<table class="table">
    <thead>
        <th>No.</th>
        <th>Jurusan</th>
        <th>Action</th>
    </thead>
    <tbody>
        <?php 
            $no = 1;
            foreach ($data['jur'] as $jur) { ?>
                
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $jur['nama_jurusan'] ?></td>
                    <td>
                        <a href="<?= BASE_URL ?>/jurusan/edit/<?= $jur['id_jurusan']?>" class="btn btn-primary">Edit</a>
                        <a href="<?= BASE_URL ?>/jurusan/hapus/<?= $jur['id_jurusan']?>" class="btn btn-danger" onclick="javascript:return confirm('Hapus Data Jurusan?')">Hapus</a>
                    </td>
                </tr>
                
            <?php }
        ?>
    </tbody>
</table>