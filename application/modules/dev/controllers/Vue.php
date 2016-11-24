<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Vue extends KANG_controller {

	function __construct()
	{
		parent::__construct();
	}

	function index() {
		$data["header"] = $this->render_html('header');
		$data["footer"] = $this->render_html('footer', array(
			'js' => array(
				'js/vue-routes.js',
				'../../modules/dev/vue_script.js'
			)
		));

		$this->load->view('vue_view', $data);
	}

	/*function view_config()
	{	
		echo "<pre>";
		print_r($this->config->item("assets_default"));
	}

	function test_vue(){
		$data["header"] = $this->render_html('header', array(
			'title' => 'Dashboard',
			'js' => array(
				'corejs/vue/vue.js'
			)
		) );

		$data["footer"] = $this->render_html('footer', array(
			'js' => array(
				'modules/main/test_vue.js'
			)
		) );

		$this->load->view('test_vue', $data);
	}*/
}