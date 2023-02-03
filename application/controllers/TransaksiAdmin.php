<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TransaksiAdmin extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('TransaksiModel');
		// $this->load->model('CategoryModel');
        // $this->load->model('KomentarModel');
		// check_not_login();
	}

    public function index(){
        $data['title'] = "Pesanan Product";
        $data['row'] = $this->TransaksiModel->get();
        $this->template->load('admin/maincontents','admin/page/pesanan', $data);
    }
    public function pembayaran(){
        $data['title'] = "Pembayaran Product";
        $data['row'] = $this->TransaksiModel->get();
        $this->template->load('admin/maincontents','admin/page/pembayaran', $data);
    }
    public function pengiriman(){
        $data['title'] = "Pembayaran Product";
        $data['row'] = $this->TransaksiModel->get();
        $this->template->load('admin/maincontents','admin/page/pengiriman', $data);
    }

}