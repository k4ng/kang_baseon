<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class Kauth_model extends CI_Model 
    {
	
		function check_account($access, $password)
		{
			$this->db->from("sys_users");
			$this->db->where("su_username", $access);
			$this->db->where("su_password", kang_hash($password));
			$query = $this->db->get();
			
			return $query;
		}

		function create_account($access, $hash)
		{
			$user = $this->db->select("su_email")->from("sys_users")->where("su_email", $access)->get()->num_rows();
			if($user === 0)
			{
				$insert = $this->db->insert("sys_users", array(
					"su_hash"	=> $hash,
					"su_email"	=>	$access,
					"su_status"	=>	"unverified",
					"su_role"	=>	"member"
				));

				if($insert)
				{
					return TRUE;
				}
				else
				{
					return FALSE;
				}
			}
			else
			{
				return FALSE;
			}
		}

		function check_username($username)
		{
			$this->db->from("sys_users");
			$this->db->where("su_username", $usernmae);
			$query = $this->db->get();

			return $query->num_rows();
		}
	}