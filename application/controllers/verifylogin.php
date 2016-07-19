<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VerifyLogin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model','',TRUE);
	}
	function index()
	{
		$this->load->library('form_validation');
		//$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		//$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		//query the database
		$result = $this->login_model->login_user($username, $password);
		//print_r($result);
		if($result)
		{
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array(
					'id' => $row->id,
					'username' => $row->username
				);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			redirect('http://localhost/nueva/encuestas/index.php/home','refresh');
		}
		else
		{
			redirect('http://localhost/nueva/encuestas/','refresh');
			$this->form_validation->set_message('check_database', 'Invalid username or password');
			return false;
		}
	}
	function check_database($password)
	{
		$username = $this->input->post('username');
		//query the database
		$result = $this->user->login_user($username, $password);
		if($result)
		{
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array(
					'id' => $row->id,
					'username' => $row->username
				);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_database', 'Usuario invalido');
			return false;
		}
	}
}