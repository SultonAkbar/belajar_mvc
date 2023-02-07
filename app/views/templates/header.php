<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?> </title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>

<body>

    <div class="navbar navbar-expand-lg justify-content-beetwen bg-primary-subtle">
        <div class="container">
            <a class="navbar-brand fs-3" href="<?= BASEURL; ?>">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= BASEURL; ?>">Home</a>
                </li>
                <li class="nav-item ms-4 ">
                    <a class="nav-link" href="<?= BASEURL; ?>mahasiswa">Mahasiswa </a>
                </li>
                <li class="nav-item ms-4 ">
                    <a class="nav-link" href="<?= BASEURL; ?>about">About</a>
                </li>
            </ul>
        </div>
    </div>