<br>
<div class="jumbotron shadow">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="<?= BASE_URL; ?>/img/school.jpg" alt="Gambar Sekolah" class="img-fluid shadow" style="border-radius: 20px;">
            </div>
            <div class="col-md-6">
                <h3 class="display-3"><?= $data['sekolah']['nama_sekolah']; ?></h3>
                <p class="lead">Kepala Sekolah: <?= $data['sekolah']['nama_kepsek']; ?></p>
                <p class="lead">Alamat: <?= $data['sekolah']['alamat']; ?></p>
                <p class="lead">Halaman Web: <?= $data['sekolah']['web']; ?></p>
            </div>
        </div>
    </div>
</div>