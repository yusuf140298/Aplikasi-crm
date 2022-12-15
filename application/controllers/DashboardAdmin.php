<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardAdmin extends CI_Controller {

	public function index()
	{
		$this->template->load('admin/maincontents','admin/page/dashboard');
		// $this->load->view('admin/maincontents');
	}
}
