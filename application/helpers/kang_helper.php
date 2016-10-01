<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	/***
	* Helper KANG
	* Author : Cahya Dyazin
	*/

	/**
	 * @param  string
	 * @return string filter
	 */
	function noinject($data)
	{
		$filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES))));
		return $filter;
	}

	/**
	 * @param  nama file, bagian (back or front)
	 * @param  Simpel base url
	 * @return path
	 */
	function kbase($file = null, $part = "back")
	{
		if($file != null)
		{
			if(trim($part) == "back")
			{
				$path = base_url("assets/admin/".$file);
			}
			else
			{
				$path = base_url("assets/admin/".$file);
			}
			echo $path;
			return $path;
		}
	}


	/**
	 * @desc memvalidasi cache
	 */
	function cachevalidate(){
		$ts = gmdate("D, d M Y H:i:s") . " GMT";
		header("Expires: $ts");
		header("Last-Modified: $ts");
		header("Pragma: no-cache");
		header("Cache-Control: no-cache, must-revalidate");
	}

	/**
	 * @desc mengaktifkan cache
	 */
	function cacheOn(){
		$seconds_to_cache = 3600;
		$ts = gmdate("D, d M Y H:i:s", time() + $seconds_to_cache) . " GMT";
		header("Expires: $ts");
		header("Pragma: cache");
		header("Cache-Control: max-age=$seconds_to_cache");
	}

	