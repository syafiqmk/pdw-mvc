<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['title'] ?></title>
    <!-- koneksi style -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="<?= BASE_URL?>" class="navbar-brand">Akademik</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL?>">Jurusan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL?>/prodi">Prodi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL?>/mahasiswa">Mahasiswa</a>
                    </li>
                </ul>
                <p class="navbar-nav text-light">Selamat Datang, <?= $_SESSION["nama"] ?></p>
                <a href="<?= BASE_URL; ?>/logout" class="btn btn-danger ms-3">Logout</a>
            </div>
        </div>
    </nav>

