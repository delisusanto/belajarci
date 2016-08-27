<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {


	public function index()
	{
		echo "ini controller halaman";
	}

	public function view($halaman = 'test')
	{

		if (!file_exists(APPPATH."views/pages/".$halaman.'.php')){
			show_404();
		} 

		$data['judul']=$halaman;

		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$halaman);
		$this->load->view('templates/footer');

	}
}