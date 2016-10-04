<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
*************************************************************
* CONFIG kang_baseon
*
* Author 	: Cahya Dy
* Blog 		: www.kang-cahya.com
* 
*************************************************************
 */



/*
**************************************
* SITE INFO DAN META
**************************************
* 
 */

$config["site_info"] = array(
	"title"			=> "No title",
	"description"	=> "No description"
);

$config["meta"] = array(
	"author"	=> "No author",
	"keywords"	=> "No keyword",
	"extends"	=> array(
		"<meta content='' name=''>",
		"<meta content='' name=''>"
	)
);


/*
**************************************
* JS Framework
**************************************
* Vue 2.1
* 
 */

$config['js_framework'] = array(
	"vue" 		=> TRUE
);


/*
**************************************
* ASSETS DEFAULT (CSS DAN JS)
**************************************
* Format penulisan asset default adalah :
* 
* $config['assets_default'] = array( 
*	"header" => array( 
*		"js" =>	array(),
*		"jsi" => array(),
*		"css" => array(),
*		"cssi" => array()
*	),
*	"footer" => array(
*		"js" =>	array(),
*		"jsi" => array(),
*		"css" => array(),
*		"cssi" => array()
*	)
* );
*
* jsi adalah akronim dari js include
* cssi adalah akronim dari css include
*
* 
 */

$config['assets_default'] = array( 
	"header" => array( 
		"js" =>	array(
			"js/modernizr.min.js"
		),
		"jsi" => array(),
		"css" => array(
			"css/bootstrap.min.css",
			"css/core.css",
			"css/components.css",
			"css/icons.css",
			"css/pages.css",
			"css/menu.css",
			"css/responsive.css"
		),
		"cssi" => array()
	),
	"footer" => array(
		"js" => array(
			"js/jquery.min.js",
			"js/bootstrap.min.js",
			"js/detect.js",
			"js/fastclick.js",
			"js/jquery.slimscroll.js",
			"js/jquery.blockUI.js",
			"js/waves.js",
			"js/wow.min.js",
			"js/jquery.nicescroll.js",
			"js/jquery.scrollTo.min.js",
			"js/jquery.core.js",
			"js/jquery.app.js"
		),
		"jsi" => array(),
		"css" => array(),
		"cssi" => array()
	)
);
