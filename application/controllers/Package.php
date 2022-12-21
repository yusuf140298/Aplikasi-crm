<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {

	public function index()
	{
		$this->template->load('admin/maincontents','admin/page/package');
		// $this->load->view('admin/maincontents');
	}
}
