<?php

class Siswa extends Controller {

    public function index($page = 1){
        $limit = 5;
        $start = ($page - 1) * $limit;
        $total_siswa = $this->model('Siswa_model')->getTotalSiswa();
        $total_pages = ceil($total_siswa / $limit);
        $data['judul'] = 'Daftar Siswa';
        $data['siswa'] = $this->model('Siswa_model')->getAllSiswa($limit, $start);
        $data['total_pages'] = $total_pages;
        $this->view('templates/header', $data);
        $this->view('siswa/index', $data);
        $this->view('templates/footer');
    }

    public function tambah() {
        if( $this->model('Siswa_model')->tambahDataSiswa($_POST) > 0 ) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASE_URL . '/siswa');
            exit;
        }
    }

    public function delete($nis) {
        if( $this->model('Siswa_model')->hapusDataSiswa($nis) > 0 ) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/siswa');
            exit;
        }
    }

    public function detail($nis) {
        $data['judul'] = 'Detail Siswa';
        $data['siswa'] = $this->model('Siswa_model')->getSiswaByNis($nis);
        $this->view('templates/header', $data);
        $this->view('siswa/detail', $data);
        $this->view('templates/footer');
    }
    
    public function update($nis) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->model('Siswa_model')->updateDataSiswa($_POST) > 0) {
                Flasher::setFlash('berhasil', 'diupdate', 'success');
                header('Location: ' . BASE_URL . '/siswa');
                exit;
            } else {
                Flasher::setFlash('gagal', 'diupdate', 'danger');
                header('Location: ' . BASE_URL . '/siswa');
                exit;
            }
        } else {
            $data['judul'] = 'Ubah Data Siswa';
            $data['siswa'] = $this->model('Siswa_model')->getSiswaByNis($nis);
            $this->view('templates/header', $data);
            $this->view('siswa/update', $data);
            $this->view('templates/footer');
        }
    }
}