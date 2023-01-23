<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    public function index(){
        $this->template->load('user/maincontents','user/page/shop');
    }

}