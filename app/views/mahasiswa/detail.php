<h2 class="text-center">Detail Mahasiswa</h2>

<!-- button list -->
<div class="text-center mb-4">
    <a href="<?= BASE_URL ?>/mahasiswa/edit/<?= $data['maha']['nim'] ?>" class="btn btn-primary">Edit</a>
    <a href="<?= BASE_URL ?>/mahasiswa/hapus/<?= $data['maha']['nim'] ?>" class="btn btn-danger" onclick="return confirm('Hapus Data Mahasiswa?')">Hapus</a>
</div>

<!-- data mahasiswa -->
<table class="table">
    <tr>
        <td>NIM</td>
        <td>:</td>
        <td><?= $data['maha']['nim'] ?></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?= $data['maha']['nama'] ?></td>
    </tr>
    <tr>
        <td>Prodi</td>
        <td>:</td>
        <td><?= $data['maha']['nama_prodi'] ?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><?= date("l, d/M/Y", strtotime($data['maha']['tgl_lahir'])) ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?= $data['maha']['alamat'] ?></td>
    </tr>
    <tr>
        <td>Agama</td>
        <td>:</td>
        <td><?php 
                switch($data['maha']['agama']) {
                    case '1':
                        echo "Islam";
                        break;
                    
                    case '2':
                        echo "Kristen";
                        break;

                    case '3':
                        echo "Katolik";
                        break;

                    case '4':
                        echo "Hindu";
                        break;

                    case '5':
                        echo "Budha";
                        break;

                    case '6':
                        echo "Konghucu";
                        break;

                }
        ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php 
                if($data['maha']['kelamin'] == 1) {
                    echo "Laki-laki";
                } else {
                    echo "Perempuan";
                }
        ?></td>
    </tr>
    <tr>
        <td>No HP</td>
        <td>:</td>
        <td><?= $data['maha']['no_hp'] ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td><?= $data['maha']['email'] ?></td>
    </tr>
</table>