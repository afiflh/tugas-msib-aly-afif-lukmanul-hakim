<div class="page-content mb-5">
    
    <div class="container mt-3">
    <nav aria-label="breadcrumb bg-light" class="ini">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active text-dark" aria-current="page"><strong>List Siswa</strong></li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-4 mt-4">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-success btnAdd shadow" data-toggle="modal" data-target="#formModal">
        <strong>+</strong> Tambah Siswa
    </button>

    <div class="row mt-3 justify-content-end">
        <div class="col-md-12">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                    <?php for($i = 1; $i <= $data['total_pages']; $i++): ?>
                        <li class="page-item"><a class="page-link" href="<?= BASE_URL; ?>/siswa/index/<?= $i; ?>"><?= $i; ?></a></li>
                    <?php endfor; ?>
                </ul>
            </nav>
        </div>
    </div>

    

    <div class="row">
        <div class="col-md-12 mt-4">
            <table class="table">
                <thead>
                    <tr>
                        <th style="width: 200px;">Nama</th>
                        <th style="width: 150px;">Kelas</th>
                        <th>Umur</th>
                        <th style="width: 150px;">Jenis Kelamin</th>
                        <th style="width: 200px;">Alamat</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['siswa'] as $siswa) : ?>
                        <tr>
                            <td style="width: 200px;"><?= $siswa['nama']; ?></td>
                            <td style="width: 150px;"><?= $siswa['nama_kelas']; ?></td>
                            <td><?= $siswa['umur']; ?></td>
                            <td style="width: 150;"><?= $siswa['gender']; ?></td>
                            <td style="width: 200px;"><?= $siswa['alamat']; ?></td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="<?= BASE_URL; ?>/siswa/detail/<?= $siswa['nis']; ?>" role="button">Detail</a>
                                <a class="btn btn-warning btn-sm" href="<?= BASE_URL; ?>/siswa/update/<?= $siswa['nis']; ?>" role="button">Ubah</a>
                                <a class="btn btn-danger btn-sm" href="<?= BASE_URL; ?>/siswa/delete/<?= $siswa['nis']; ?>" role="button" onclick="return confirm('YAKIN?');">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>

    
    <br>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASE_URL;?>/siswa/tambah" method="post">
                    <div class="form-group">
                        <label for="nis">NIS</label>
                        <input type="number" class="form-control" id="nis" name="nis">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Siswa</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="id_kelas">Kode Kelas</label>
                        <input type="number" class="form-control" id="id_kelas" name="id_kelas">
                    </div>
                    <div class="form-group">
                        <label for="id_sekolah">ID Sekolah</label>
                        <input type="number" class="form-control" id="id_sekolah" name="id_sekolah">
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="number" class="form-control" id="umur" name="umur">
                    </div>
                    <div class="form-group">
                        <label for="gender">Jenis Kelamin</label>
                        <select class="form-control" id="gender" name="gender">
                            <option value="Pria">Pria</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Tambah</button>
                </form>
            </div>
        </div>
    </div>
</div>