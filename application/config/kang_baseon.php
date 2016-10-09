<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
*************************************************************
* CONFIGURATION File
*
* Author 	: Kang cahya
* Blog 		: www.kang-cahya.com
* Core 		: kang_baseon
* 
*************************************************************
 */



/*
**************************************
* SITE INFO
**************************************
* Pada bagian ini kamu hanya perlu mendefinisikan namanya saja.
* (untuk gambar pada icon dan favicon terletak di kang_baseon/assets/configs )
*
* 	// SETTING DEFAULT
*	"favicon"		=> "default.png",
*	"icon"			=> "default.png",
*	"title"			=> "Kang_baseon"
* 
 */

$config["site_info"] = array(
	"favicon"		=> "default.png",
	"icon"			=> "default.png",
	"title"			=> "My app"
);


/*
**************************************
* META
**************************************
* Pada bagian ini semua meta tag kamu bisa definisikan
* Terdapat 4 parameter :
* 	- description merupakan meta tag yang berfungsi untuk mendefinisikan deskripsi sebuah website
* 	- author merupakan meta tag yang berfungsi untuk mendefinisikan siapa authornya
* 	- keyword merupakan meta tag yang berfungsi untuk mendefinisikan keyword.
* 	- meta_extends merupakan variabel berisi array yang berfungsi untuk mendefiniskan meta tag lainnya, contohnya seperti:
*
* 	// EXAMPLE meta_extends
*   "meta_extends"	=> array(
*	  	'<meta name="site-verification" content="String_we_ask_for">'
*	)
*	
* 	// SETTING DEFAULT
*	"description"	=> "made with core kang_baseon",
*	"author"		=> "Kang cahya",
*	"keywords"		=> "kang_baseon core",
*	"meta_extends"	=> array()
* 
 */

$config["meta"] = array(
	"description"	=> "made with core kang_baseon",
	"author"		=> "Kang cahya",
	"keywords"		=> "kang_baseon core",
	"meta_extends"	=> array()
);


/*
**************************************
* JS Framework
**************************************
* Fungsi ini bertujuan untuk mengaktifkan js framework. 
* Jika nilai TRUE maka js framework akan otomatis di aktifkan dan di load pada html, untuk nilai FALSE berarti js framework tidak aktif.
*
* JS Framework yang di dukung adalah :
* - Vue 2.1
* 
 */

$config['js_framework_support'] = array('vue');
$config['js_framework'] = array(
	"vue" 		=> array(
		"load"		=> TRUE,
		"minify"	=> TRUE,
		"version"	=> "2.1"
	)
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
