<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product_model extends CI_Model {
	
	public function index()
	{
		
	}
	
	public function add_records($data)
	{
		$this->db->insert('product',$data);
		return;
	}
}