<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Auth extends KANG_Controller {

        public function __construct() 
        {
            parent::__construct();
        }

        public function index()
        {
        	$data["header"] = $this->render_html('header', array(
        		'title' => 'Login Page',
        		'css' => array(
        			'css/bootstrap.min.css',
        			'css/core.css',
        			'css/components.css',
        			'css/icons.css',
        			'css/pages.css',
        			'css/menu.css',
        			'css/responsive.css'
        		),
        		'js' => array(
        			'js/modernizr.min.js' 
        		)
        	) );

        	$data["footer"] = $this->render_html('footer', array(
        		'js' => array(
        			'js/jquery.min.js',
			        'js/bootstrap.min.js',
			        'js/detect.js',
			        'js/fastclick.js',
			        'js/jquery.slimscroll.js',
			        'js/jquery.blockUI.js',
			        'js/waves.js',
			        'js/wow.min.js',
			        'js/jquery.nicescroll.js',
			        'js/jquery.scrollTo.min.js',
			        'plugins/bootstrap-sweetalert/sweet-alert.min.js',
			        'js/jquery.core.js',
			        'js/jquery.app.js'
			    ),
			    'jsi' => array(
		            swal(array(
		                'title'=>'Good job!', 
		                'notif' => 'You clicked the button!', 
		                'tipe' => 'error'
		            ))
		        )
        	));
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