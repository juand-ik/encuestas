<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{
	public function index()
	{
		$this->load->helper("url");
		$this->load->helper("form");
		$this->load->library("form_validation");
		$this->load->view("view_main");
	}
}