<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register_model extends CI_Model {

	public function index()
	{
	
	}
	
	public function get_records()
	{
		$query=$this->db->get('register');
		return $query->result();
	}
	
	public function add_records($data)
	{
		$this->db->insert('register',$data);
		return;
	}
	
	public function update_record($data)
	{
		$this->db->where('id',2);
		$this->db->update('register',$data);
	}
	
	public function delete_row()
	{
		$this->db->where('id',$this->uri->segment(3));
		$this->db->delete('register');
	}
}