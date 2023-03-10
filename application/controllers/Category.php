<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('CategoryModel');
		check_not_login();
	}

	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('category', 'Category', 'required');
		$this->form_validation->set_rules('description', 'Description', 'required');
        if ($this->form_validation->run() == FALSE)
			{
    		$data['row'] = $this->CategoryModel->get();
			$data ['title'] = "Data Category";
			// $this->template->load('admin/maincontents','admin/page/adduser', );
            $this->template->load('admin/maincontents','admin/page/category',$data);
			}
            else{
            $post = $this->input->post(null, TRUE);
			$this->CategoryModel->add($post);
				if($this->db->affected_rows()>0){
					// $this->session->set_flashdata('success', 'Data Berhasi Disimpan');
				}
				redirect('Category');
			}
		// $this->load->view('admin/maincontents');
	}
    public function delete_category($id){
		$this->CategoryModel->delete($id);
		if($this->db->affected_rows()> 0){
				// echo "<script>alert('Berhasil Dihapus');</script>";
			}
				echo "<script>window.location='".site_url('Category')."';</script>";
	}
    public function edit_category(){
        $post = $this->input->post(null, TRUE);
        $query = $this->db->query("SELECT * FROM category WHERE nama_category = '$post[editcategory]' AND id_category != '$post[id_category]'");
        if ($query->num_rows()>0) {
            echo "<script>alert('Category Sudah Ada');</script>";
			echo "<script>window.location='".site_url('Category')."';</script>";
        }else {
            $this->CategoryModel->edit($post);
            if($this->db->affected_rows()>0){
                // $this->session->set_flashdata('success', 'Data Berhasi Disimpan');
            }
                redirect('Category');
        }
    }

}
