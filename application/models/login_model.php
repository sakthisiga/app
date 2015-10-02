<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {
	
	public function index()
	{
		
	}
	
	public function validate()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('login');
		
		if($query->num_rows() == 1)
		{
			return TRUE;
		}
		
	}
	
	public function create_member()
	{
		$new_member_insert_data = array(
				'fname' => $this->input->post('first_name'),
				'lname' => $this->input->post('last_name'),
				'SSN' => $this->input->post('ssn'),
				'email' => $this->input->post('email_address'),
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password'))
		);
		
		$insert = $this->db->insert('login', $new_member_insert_data);
		return $insert;
	}
}