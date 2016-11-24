<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Complete extends KANG_Controller {

        public function __construct() 
        {
            parent::__construct();
        }

        public function index()
        {
        	/*$data["header"] = $this->render_html('header', array(), FALSE);
        	$data["footer"] = $this->render_html('footer');
        	
			$this->load->view('auth/page-login', $data);*/

            // $post = $this->input->post();

            
            // print_r(hash_algos());
            $wh = hash('whirlpool', "123", false); 
            echo hash('sha512', $wh, false); 

        }
    }