<div class="container mt-5">
    <h1 class="mb-5">Detail <?= $data['mhs']['nama']; ?></h1>
    <div class="card" style="width: 20rem;">
        <img src="<?= $data['mhs']['gambar']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $data['mhs']['nama']; ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= $data['mhs']['NIS']; ?></h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" style="text-decoration: none;" class="badge text-bg-secondary">Kembali</a>
        </div>
    </div>
</div>