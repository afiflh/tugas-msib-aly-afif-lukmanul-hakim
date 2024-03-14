<div class="container mt-3">
    <?php foreach($data['kelas'] as $kelas) : ?>
        <a href="kelas/detail/<?= $kelas['id_kelas']; ?>" class="text-decoration-none">
            <div class="card bg-warning text-dark shadow" style="margin-bottom: 20px;">
                <div class="card-body">
                    <h5 class="card-title"><?= $kelas['nama_kelas']; ?></h5>
                    <p class="card-text">ID Kelas: <?= $kelas['id_kelas']; ?></p>
                    <p class="card-text">Wali Kelas: <?= $kelas['wali_kelas']; ?></p>
                </div>
            </div>
        </a>
    <?php endforeach; ?>
</div>