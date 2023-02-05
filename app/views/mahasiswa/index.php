<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h1 class="mb-5">Daftar Mahasiswa</h1>
            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <?= $mhs['nama']; ?>
                        <a href="<?= BASEURL; ?>mahasiswa/detail/<?= $mhs['id']; ?>" style="text-decoration: none;" class="badge text-bg-primary ">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>