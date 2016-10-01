<?php defined('BASEPATH') OR exit('No direct script access allowed');

	/*
	* Library auth DOC CMS
	* Author : Cahya Dyazin
	*
	* 404 : not found (data tidak ada)
	* 403 : forbiden (upaya hack)
	* 100 : oke
	*/
	
	class Kauth
	{
		function check_login( $param = array() )
		{
			$CI =& get_instance();
			$CI->load->model("kauth_model","kmod");

			$access_s = $param["access"];
			$password_s = $param["password"];

			$check = $CI->kmod->check_account($access_s, $password_s);

			if($check->num_rows() <> 0)
			{
				$CI->session->set_userdata('isLogin', TRUE);
				$CI->session->set_userdata('data_user',$check->row());
					
				redirect($param["redirect100"]);
			}
			else
			{
				$CI->session->set_flashdata('fail', $access_s);
				$CI->session->set_flashdata('fail_m', "Username dan katasandi tidak cocok!");
				redirect($param["redirect404"]);
			}
		}
		
		function check_session($status){
			$CI =& get_instance();
			if($status == "login"){
				if($CI->session->userdata('isLogin') == FALSE) {
					redirect('auth');
				}
			} else {
				if($CI->session->userdata('isLogin') == TRUE) {
					redirect('doc-dashboard/index');
				}
			}
		}
	}
?>









