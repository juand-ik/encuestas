<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_usuarios extends CI_Model
{
	/*function __construct()
	{
		parent::__construct();
	}*/
	function get_todos()
	{
		$this->load->database();
		$query = $this->db->get("suscriptores");
		return $query->result();
	}
	function get_ById($id)
	{
		$this->load->database();
		$query = $this->db->where("id",$id);
		$query = $this->db->get("suscriptores");
		return $query->result();
	}
	function add()
	{
		$this->load->database();
		//$this->db->insert("activos",$this->input->post());
		$data_insert = $this->input->post();
		
		unset($data_insert["btn_guardar"]);
		$this->db->insert("suscriptores",$data_insert);
		return $this->db->insert_id();
	}
	function edit($id)
	{
		$this->load->database();
		$data_edit = $this->input->post();
		unset($data_edit["btn_enviar"]);
		$this->db->where("id",$id);
		$this->db->update("suscriptores",$data_edit);
		//return $this->db->insert_id();
	}
	function elim($id)
	{
		$this->load->database();
		$this->db->where("id",$id);
		$this->db->delete("suscriptores");
	}
}

/* Modelo contactos*/