<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class Kauth_model extends CI_Model {
	
		function check_account($access, $password)
		{
			$this->db->from("users");
			$this->db->where("username", $access);
			$this->db->where("password", sha1(md5($password)));
			$this->db->where("status", "active");
			$query = $this->db->get();
			
			return $query;
		}
	}