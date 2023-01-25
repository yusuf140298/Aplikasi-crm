<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentication extends CI_Controller {

    public function index(){
        $this->load->view('user/login');
    }
    public function proses()
	{
		// $this->template->load('admin/maincontents','admin/page/dashboard');

		$post = $this->input->post(null, TRUE);
        $this->load->model('AccountModel');
        $this->load->library('form_validation');
        $query = $this->AccountModel->login_user($post);
        ?>
        <script src="<?=base_url()?>assets/admin/dist/sweetalert/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="<?=base_url()?>assets/admin/dist/sweetalert/sweetalert2.min.css">
        <style>
			body{
				font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
				font-size: 1.124em;
				font-weight: normal;
			}
		</style>
        <style>
				.swal2-popup{
					font-size: 1.0rem !important;
				} 
        </style>
		<body></body>
		<?php
        if($query->num_rows()> 0){
            $row = $query->row();
            $params = array(
                    'id_user' => $row->id_user,
                    'rule' => $row->rule
                );
        $this->session->set_userdata($params);
        ?>
		<script>
            Swal.fire({
            icon: 'success',
            title: 'Success',
            text: 'login successful!'
            }).then(result =>{
                window.location='<?=site_url('Landing')?>';
            })
		</script>
		<?php
        }
        else{
            ?>
        <script>               
            Swal.fire('wrong username or password!').then(result =>{
                window.location='<?=site_url('Authentication')?>';
            })
        </script>
        <?php
        }
	}
    public function logout()
    {
        $params = array('id_user' , 'rule');
        $this->session->unset_userdata($params);
        redirect('Landing');

	}

}