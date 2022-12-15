<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()
	{
		$this->template->load('admin/maincontents','admin/page/profile');
		// $this->load->view('admin/maincontents');
	}
}
