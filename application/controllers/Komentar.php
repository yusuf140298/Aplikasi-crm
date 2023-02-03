<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komentar extends CI_Controller {

    function __construct(){
		parent::__construct();
		// $this->load->model('ProductModel');
		// $this->load->model('CategoryModel');
        $this->load->model('KomentarModel');
		// check_not_login();
	}

    public function add(){

        $post = $this->input->post(null, TRUE);
        $this->KomentarModel->add($post);
        if ($this->db->affected_rows() > 0) {
            echo   '<script>
                        alert("Terima Kasih Sudah memberi komentar");            
                    </script>';
            redirect('Transaksi/history');
        }

    }

}