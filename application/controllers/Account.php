<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('AccountModel');
		check_not_login();
	}

	public function index()
	{
		$data['row'] = $this->AccountModel->get();
		$data['title'] = 'Account';
		$this->template->load('admin/maincontents','admin/page/manajemenuser', $data);
		// $this->load->view('admin/maincontents');
	}
	public function add_admin()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username','Username', 'required|min_length[5]|is_unique[user.username]');
		$this->form_validation->set_rules('email','Email', 'required|valid_email');
		$this->form_validation->set_rules('password','Password', 'required|min_length[6]');
		$this->form_validation->set_rules('no_tlp','No.Tlp', 'required|numeric');
		$this->form_validation->set_rules('rule','Level', 'required');

		if ($this->form_validation->run() == FALSE)
			{
			$data ['title'] = "Add Account Admin";
			$this->template->load('admin/maincontents','admin/page/adduser', $data);
			}
			else
			{
			$post = $this->input->post(null, TRUE);
			$this->AccountModel->add_admin($post);
				if($this->db->affected_rows()>0){
					// $this->session->set_flashdata('success', 'Data Berhasi Disimpan');
				}
				redirect('Account');
			}
	}
	public function delete_admin($id){
		$this->AccountModel->delete_admin($id);
		if($this->db->affected_rows()> 0){
				// echo "<script>alert('Berhasil Dihapus');</script>";
			}
				echo "<script>window.location='".site_url('Account')."';</script>";
	}
	public function edit_admin($id){

		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('username','Username', 'required|min_length[5]|callback_username_check');
		$this->form_validation->set_rules('email','Email', 'required|valid_email');
		if ($this->input->post('password')){
		$this->form_validation->set_rules('password','Password', 'required|min_length[6]');
		}
		$this->form_validation->set_rules('no_tlp','No.Tlp', 'required|numeric');
		$this->form_validation->set_rules('rule','Level', 'required');


			if ($this->form_validation->run() == FALSE)
				{
				$query = $this->AccountModel->get($id);
					if ($query->num_rows() > 0) {
						$data ['row'] = $query->row();
						$data ['title'] = "Edit Account Admin";
						$this->template->load('admin/maincontents','admin/page/edituser', $data);
					}else{
						echo "<script>alert('Data Tidak di Temukan!');
						window.location='".site_url('Account')."';
						</script>";
					}
				}
				else
				{
				$post = $this->input->post(null, TRUE);
				$this->AccountModel->edit_admin($post);
				if($this->db->affected_rows()>0){
					// $this->session->set_flashdata('success', 'Data Berhasi Disimpan');
				}
					redirect('Account');
				}

	}
	public function username_check()
	{
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM user WHERE username = '$post[username]' AND id_user != '$post[id_user]'");
		if ($query->num_rows() > 0) {
			$this->form_validation->set_message('username_check', 'The Username field must contain a unique value.');
			return FALSE;
		}else{
			return TRUE;
		}
	}
	public function Accountusers()
	{
		$data['row'] = $this->AccountModel->getuser();
		$data['title'] = 'Account Customer';
		$this->template->load('admin/maincontents','admin/page/accountuser', $data);
		// $this->load->view('admin/maincontents');
	}
	public function Editstatus()
	{
		$post = $this->input->post(null, TRUE);
		$this->AccountModel->edit_user($post);
		if($this->db->affected_rows()>0){
			// $this->session->set_flashdata('success', 'Data Berhasi Disimpan');
		}
			redirect('Account/Accountusers');
	}
	
}
