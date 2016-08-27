<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {


	public function index()
	{
		echo "ini controller halaman";
	}

	public function tentang()
	{
		echo "ini halaman tentang";
	}

	public function produk()
	{
		echo "ini halaman Produk";
	}

	public function page($view)
	{
		echo $view;
	}
}