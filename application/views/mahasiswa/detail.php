<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Detail Data Mahasiswa</h5>
                <div class="card-body">
                    <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                    <h5 class="card-subtitle mb-2 text-primary"><?= $mahasiswa['email']; ?></h5>
                    <h5 class="card-title"><?= $mahasiswa['nrp']; ?></h5>
                    <h5 class="card-title"><?= $mahasiswa['jurusan']; ?></h5>
                    <!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
                    <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>