<div class="container mt-3">
    <div class="card">
        <form action="<?= BASE_URL;?>/siswa/update/<?= $data['siswa']['nis']; ?>" method="post">
            <div class="form-group" style="margin: 10px;">
                <label for="nis">Nomor Induk Siswa:</label>
                <input type="text" class="form-control" id="nis" name="nis" value="<?= $data['siswa']['nis']; ?>" readonly>
            </div>
            <div class="form-group" style="margin: 10px;">
                <label for="nama">Nama Siswa:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['siswa']['nama']; ?>">
            </div>
            <div class="form-group" style="margin: 10px;">
                <label for="kelas">ID Kelas:</label>
                <input type="text" class="form-control" id="id_kelas" name="id_kelas" value="<?= $data['siswa']['id_kelas']; ?>">
            </div>
            <div class="form-group" style="margin: 10px;">
                <label for="id_sekolah">ID Sekolah:</label>
                <input type="text" class="form-control" id="id_sekolah" name="id_sekolah" value="<?= $data['siswa']['id_sekolah']; ?>" readonly>
            </div>
            <div class="form-group" style="margin: 10px;">
                <label for="umur">Umur:</label>
                <input type="text" class="form-control" id="umur" name="umur" value="<?= $data['siswa']['umur']; ?>">
            </div>
            <div class="form-group" style="margin: 10px;">
                <label for="gender">Jenis Kelamin:</label>
                <input type="text" class="form-control" id="gender" name="gender" value="<?= $data['siswa']['gender']; ?>">
            </div>
            <div class="form-group" style="margin: 10px;">
                <label for="alamat">Alamat:</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data['siswa']['alamat']; ?>">
            </div>
            <div class="form-group" style="margin: 10px;">
                <button type="submit" class="btn btn-success">Ubah Data</button>
                <a href="<?= BASE_URL;?>/siswa" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</div>
