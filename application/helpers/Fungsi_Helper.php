<?php

function check_already_login(){
	$ci =& get_instance();
	$user_session =$ci->session->userdata('id_user');
	if ($user_session) {
		redirect('DashboardAdmin');
	}
}
function check_not_login(){
	$ci =& get_instance();
	$user_session =$ci->session->userdata('id_user');
	if (!$user_session) {
		redirect('AuthAdmin');
	}
}
function check_admin(){
	$ci =& get_instance();
	$ci->load->library('fungsi');
	if ($ci->fungsi->user_login()->rule != 1){
		redirect('DashboardAdmin');

	}
}