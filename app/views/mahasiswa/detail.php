<div class="container mt-5">
    <h1 class="mb-5">Detail <?= $data['mhs']['nama']; ?></h1>
    <div class="card" style="width: 20rem;">
        <img src="<?= BASEURL; ?>img/<?= $data['mhs']['gambar']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
            <h6 class="card-subtitle text-muted"><?= $data['mhs']['NIS']; ?></h6>
            <p class="card-text mt-3">Email : <?= $data['mhs']['email']; ?></p>
            <p class="card-text">Jurusan : <?= $data['mhs']['jurusan']; ?></p>
            <a href="<?= BASEURL; ?>mahasiswa" style="text-decoration: none;" class="badge text-bg-secondary">Kembali</a>
        </div>
    </div>
</div>