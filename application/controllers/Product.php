<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('ProductModel');
		$this->load->model('CategoryModel');
		check_not_login();
	}

	public function index()
	{
		$data['row'] = $this->ProductModel->get();
		$data['title'] = "Product";
		$this->template->load('admin/maincontents','admin/page/product',$data);
		// $this->load->view('admin/maincontents');
	}
	public function add_items()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('items', 'Items', 'required');
		$this->form_validation->set_rules('qty', 'Quantity', 'required|numeric');
		$this->form_validation->set_rules('price', 'Price', 'required|numeric');
		$this->form_validation->set_rules('category', 'category', 'required');
		// $this->form_validation->set_rules('image_product', 'Image', 'required');
		$this->form_validation->set_rules('description', 'Dscription', 'required');
		if ($this->form_validation->run() == FALSE){
			$data['row'] = $this->CategoryModel->get();
			$data['title'] = "Add Items";
			$this->template->load('admin/maincontents','admin/page/additems',$data);
		}else{
			$post = $this->input->post(null, TRUE);
			$config['upload_path']          = './uploads/img_product';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 2048;
			$config['file_name']             ='product-'.date('ymd').'-'.substr(md5(rand()),0,10);
			$this->load->library('upload',$config);

			if(@$_FILES['image_product']['name'] != null){
				if($this->upload->do_upload('image_product')){
					$post['image_product'] = $this->upload->data('file_name');
					$this->ProductModel->add($post);
					if($this->db->affected_rows()>0){
						// $this->session->set_flashdata('success', 'Data Berhasi Disimpan');
					}
					redirect('Product');
				}else{
					$error =$this->upload->display_errors();
					// echo $error;
					redirect('Product/add_items');

				}
			}

		}
		// $this->load->view('admin/maincontents');
	}
	public function edit_product($id)
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('items', 'Items', 'required');
		$this->form_validation->set_rules('qty', 'Quantity', 'required|numeric');
		$this->form_validation->set_rules('price', 'Price', 'required|numeric');
		$this->form_validation->set_rules('category', 'category', 'required');
		$this->form_validation->set_rules('description', 'Dscription', 'required');
		if ($this->form_validation->run() == FALSE){
			$query = $this->ProductModel->get($id);
			if ($query->num_rows() > 0) {
				$data ['row'] = $query->row();
				$data['cat'] = $this->CategoryModel->get();
				$data ['title'] = "Edit Product";
				$this->template->load('admin/maincontents','admin/page/editproduct', $data);
			}else{
				echo "<script>alert('Data Tidak di Temukan!');
				window.location='".site_url('Product')."';
				</script>";
			}
		}
	
		// $this->load->view('admin/maincontents');
	}
	public function update_product(){
		$post = $this->input->post(null, TRUE);
		$config['upload_path']          = './uploads/img_product';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 2048;
		$config['file_name']             ='product-'.date('ymd').'-'.substr(md5(rand()),0,10);
		$this->load->library('upload',$config);

		if(@$_FILES['image_product']['name'] != null){
			if($this->upload->do_upload('image_product')){
				$post['image_product'] = $this->upload->data('file_name');
				$this->ProductModel->edit($post);
				if($this->db->affected_rows()>0){
					// $this->session->set_flashdata('success', 'Data Berhasi Disimpan');
				}
				redirect('Product');
			}else{
				$error =$this->upload->display_errors();
				// echo $error;
				redirect('Product/edit_product');

			}
		}
	}

}
