<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
//session_start(); 


class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		if($this->session->userdata('logged_in'))
		{
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$this->load->view('view_home', $data);
		}
		else
		{
			redirect('http://localhost/nueva/encuestas/', 'refresh');
		}
	}
	function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('http://localhost/nueva/encuestas/', 'refresh');
	}
}