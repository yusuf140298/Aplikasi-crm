<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
		$this->template->load('admin/maincontents','admin/page/product');
		// $this->load->view('admin/maincontents');
	}
}
