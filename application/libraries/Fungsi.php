<?php

Class Fungsi{

    protected $ci;

    public function __construct(){
        $this->ci =& get_instance(); 
    }

    function user_login(){
        $this->ci->load->model('AccountModel');
        $user_id = $this->ci->session->userdata('id_user');
        $user_data = $this->ci->AccountModel->get($user_id)->row();
        return $user_data;
    }

}