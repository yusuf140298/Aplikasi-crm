<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('ProductModel');
		$this->load->model('CategoryModel');
		// check_not_login();
	}

    public function index(){
        $data['product'] = $this->ProductModel->tampil();
        $this->template->load('user/maincontents','user/page/landing', $data);
    }
    public function contact(){
        // $this->load->view('user/maincontents');
        $this->template->load('user/maincontents','user/page/contact');
    }
    public function cek(){
        // $this->load->view('user/maincontents');
        $this->template->load('user/maincontents','user/page/cek_transaksi');
    }

}