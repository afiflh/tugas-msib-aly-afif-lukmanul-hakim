<div class="container mt-3">
    <div class="d-flex justify-content-center align-items-center">
        <div class="card" style="width: 90%;">
            <div class="jumbotron">
                <h1 class="display-4 text-center">SMA NEGERI 1 Otak Kanan</h1><br>
                <pre class="lead text-left">
                    <strong>Nomor Induk Siswa :</strong> <?= $data['siswa']['nis']; ?>

                    <strong>Nama Siswa        :</strong> <?= $data['siswa']['nama']; ?>

                    <strong>Kelas             :</strong> <?= $data['siswa']['nama_kelas']; ?>

                    <strong>Jenis Kelamin     :</strong> <?= $data['siswa']['gender']; ?>

                    <strong>Alamat            :</strong> <?= $data['siswa']['alamat']; ?>

                    <strong>Umur              :</strong> <?= $data['siswa']['umur']; ?> Tahun

                </pre>
                <hr class="my-4">
                <a class="btn btn-primary btn-lg" href="<?= BASE_URL; ?>/siswa" role="button">Kembali</a>
            </div>
        </div>
    </div>
</div>

