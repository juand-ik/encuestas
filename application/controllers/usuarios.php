<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller
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
			
			$this->load->helper("url");
			$this->load->model("M_usuarios");
			$data["listado"] = $this->M_usuarios->get_todos();

			$this->load->view('view_users', $data);
		}
		else
		{
			redirect('http://localhost/encuestas/', 'refresh');
		}
	}
	function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('http://localhost/encuestas/', 'refresh');
	}
	function nuevo()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		
		$this->load->helper("form");
		$this->load->library("form_validation");
		$this->load->model("M_usuarios");
		//$this->load->view('view_new_users',$data);
		
		if($this->input->post())
		{
			$this->form_validation->set_rules("nombre","Nombre muestra Erro__","required|min_length[3]");
			$this->form_validation->set_rules("telefono","Telefono no valido__","integer");
			$this->form_validation->set_rules("correo","Email no valido__","required|valid_email");
			
			if($this->form_validation->run() == TRUE)
			{
				print_r($this->input->post());
				//echo "validation - Run";
			}
			else
			{
				$this->load->view("view_new_users",$data);
				echo "<script> alert('dato no valido')</script>";
			}
		}
		else
		{
			$this->load->view('view_new_users',$data);
		}
	}
}
