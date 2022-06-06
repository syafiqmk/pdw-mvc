<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak</title>
    <!-- link css -->
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>/css/style.css">
</head>
<body>

    <div class="container">
        <h2 class="text-center mb-5">Data Prodi</h2>
        <table class="table">
            <thead>
                <th>No</th>
                <th>Prodi</th>
                <th>Jurusan</th>
            </thead>
            <tbody>
                <?php 
                    $no = 1;
                    foreach($data['prodi'] as $row) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $row['nama_prodi'] ?></td>
                            <td><?= $row['nama_jurusan'] ?></td>
                        </tr>
                    <?php }
                ?>
            </tbody>
        </table>
    </div>
    

    <!-- link javascript -->
    <script src="<?= BASE_URL ?>/js/jquery-3.6.0.js"></script>
    <script src="<?= BASE_URL ?>/js/bootstrap.bundle.js"></script>
    <script src="<?= BASE_URL ?>/js/script.js"></script>
</body>
</html>