<?php 

class About extends Controller{

	public function index($nama = 'ogi', $Pekerjaan = "pegawai Swasta", $umur = 21) {

		$data['judul'] = 'About me'; 
		$data['nama'] = $nama; 
		$data['Pekerjaan'] = $Pekerjaan; 
		$data['umur'] = $umur;


		$this->view('template/header', $data);
		$this->view('about/index', $data);
		$this->view('template/footer');

	}


	public function page() {
		$data['judul'] = 'Pages'; 

		$this->view('template/header', $data);
		$this->view('about/page');
		$this->view('template/footer');

	}

}