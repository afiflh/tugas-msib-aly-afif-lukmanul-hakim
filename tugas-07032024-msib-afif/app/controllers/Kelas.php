<?php

class Kelas extends Controller {
    public function index() {
        $data['judul'] = 'Kelas';
        $data['kelas'] = $this->model('Kelas_model')->getAllKelas();
        $this->view('templates/header', $data);
        $this->view('kelas/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id_kelas) {
        $siswa = $this->model('Siswa_model')->getSiswaByKelas($id_kelas);
        $data['nama_kelas'] = $this->model('Kelas_model')->getNamaKelasById($id_kelas);
        $data['siswa'] = $siswa;
        $data['judul'] = 'Detail Kelas';
        $this->view('templates/header', $data);
        $this->view('kelas/detail', $data);
        $this->view('templates/footer');
    }
}