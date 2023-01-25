<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('ProductModel');
		$this->load->model('PackageModel');
		check_not_login();
	}

	public function index()
	{
		$data['title'] = "Package";
		$data['tampil'] = $this->PackageModel->get();
		$data['product'] = $this->ProductModel->get();
		$data['sablon'] = $this->ProductModel->get_sablon();
		$this->template->load('admin/maincontents','admin/page/package', $data);
		// $this->load->view('admin/maincontents');
	}
}
