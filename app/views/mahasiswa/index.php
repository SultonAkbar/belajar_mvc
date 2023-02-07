<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Mahasiswa
            </button>
            <h1 class="mb-5 mt-5">Daftar Mahasiswa</h1>
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

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="judulModal">Tambah Data Mahasiswa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>mahasiswa/tambah" method="post">
                    <div class="wrapper d-block my-3">
                        <label class="mb-2" for="">Masukkan Gambar</label>
                        <div class="input-group mb-3">
                            <input type="file" class="form-control" name="gambar" id="gambar">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label class="mb-2" for="nama">Masukkan Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group mb-3">
                        <label class="mb-2" for="NIS">Masukkan NIS</label>
                        <input type="text" class="form-control" id="NIS" name="NIS">
                    </div>
                    <div class="form-group mb-3">
                        <label class="mb-2" for="email">Masukkan Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="wrapper d-block my-3">
                        <label class="mb-2" for="jurusan">Pilih Jurusan</label>
                        <div class="input-group mb-3">
                            <select class="form-select" name="jurusan">
                                <option selected>Pilih Jurusan</option>
                                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                <option value="Multimedia">Multimedia</option>
                                <option value="DPIB">DPIB</option>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>