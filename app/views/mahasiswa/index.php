<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h1 class="mb-5">Daftar Mahasiswa</h1>
            <?php foreach ($data['mhs'] as $mhs) : ?>
                <ul>
                    <li><img src="<?= BASEURL; ?>/img/<?= $mhs['gambar']; ?> " alt=""></li>
                    <li><?= $mhs['nama']; ?></li>
                    <li><?= $mhs['NIS']; ?></li>
                    <li><?= $mhs['jurusan']; ?></li>
                    <li><?= $mhs['email']; ?></li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>