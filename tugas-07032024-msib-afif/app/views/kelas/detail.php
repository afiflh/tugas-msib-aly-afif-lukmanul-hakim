<div class="container mt-5">
    <h2>List Daftar Siswa Kelas <?= $data['nama_kelas']; ?></h2><br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nomor</th>
                <th scope="col">NIS</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; foreach($data['siswa'] as $siswa) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $siswa['nis']; ?></td>
                    <td><?= $siswa['nama']; ?></td>
                    <td><?= $siswa['gender']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table><br>
    <a href="<?= BASE_URL; ?>/kelas" class="btn btn-secondary shadow">Kembali</a>
</div>
