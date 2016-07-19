<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	function login_user($user,$pass)
	{
		$this->db->select('id,perfil,username,password');
		$this->db->from('users');
		$this -> db -> where('username', $user);
		$this -> db -> where('password', MD5($pass));
		$this -> db -> limit(1);
		
		$query = $this -> db -> get();
		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			//echo "nop in db";
			return false;
		}
	}
}