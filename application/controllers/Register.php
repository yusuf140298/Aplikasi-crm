<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    function __construct(){
		parent::__construct();
        $this->load->model('AccountModel');
    
    }

    public function index(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username','Username', 'required|min_length[5]|is_unique[user.username]');
		$this->form_validation->set_rules('email','Email', 'required|valid_email');
		$this->form_validation->set_rules('password','Password', 'required|min_length[6]');
        $this->form_validation->set_rules('conpass', 'Confirm Password', 'required|matches[password]',
		array('matches' => '%s not the same as password')
		);
		$this->form_validation->set_rules('no_tlp','No.Tlp', 'required|numeric');


        if ($this->form_validation->run() == FALSE)
			{
            $data ['title'] = "Register";
            $this->template->load('user/maincontents', 'user/page/register', $data);
            }
            else
            {
            $post = $this->input->post(null, TRUE);
            $this->AccountModel->add_user($post);
                if($this->db->affected_rows()>0){
                    // $this->session->set_flashdata('success', 'Data Berhasi Disimpan');
                }
                redirect('Authentication');
            }
    }
}