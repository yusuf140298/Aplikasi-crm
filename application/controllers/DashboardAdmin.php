<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardAdmin extends CI_Controller {

	public function index()
	{
		check_not_login();
		$data['title'] = "Dashboard";
		$this->template->load('admin/maincontents','admin/page/dashboard',$data);
		// $this->load->view('admin/maincontents');
	}
}
