<?php 

class Home extends Controller{
	public function index(){
		$data['judul'] = "Halaman Utama";
		$data['nama'] = $this->model('User_model')->getUser();
		$this->view('templates/header', $data);
		$this->view('home/index', $data);
		$this->view('templates/footer');
	}

	public function more(){
		$data['judul'] = "Tentang Sekolah";
		$data['sekolah'] = $this->model('Sekolah_model')->getSekolah(1);
		$this->view('templates/header', $data);
		$this->view('home/more', $data);
		$this->view('templates/footer');
	}
}