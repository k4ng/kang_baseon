<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Auth extends KANG_Controller {

        public function __construct() 
        {
            parent::__construct();
        }

        public function index()
        {
        	$data["header"] = $this->render_html('header');
        	$data["footer"] = $this->render_html('footer');
        	
			$this->load->view('auth/page-login', $data);
        }

        public function verify()
        {
        	$post = $this->input->post();

        	$this->kauth->check_login( array(
        		"access" 		=> $post["access"],
        		"password" 		=> $post["password"],
        		"redirect100" 	=> "main/dashboard",
        		"redirect404" 	=> "auth"
	        ) );
        }
    }