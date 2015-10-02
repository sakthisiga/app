<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home_model extends CI_Model {

	public function _index()
	{
		/*$data['title'] = "Home Page";
		$this->load->view('HandF/header.php',$data);
		$this->load->view('home_v',$data);
		$this->load->view('HandF/footer.php'); */
	}
	
	public function getValue()
	{
		$sql = "SELECT * from users where id = ? and fname = ?";
		$query = $this->db->query($sql, array(1,'Sakthivel'));
	//	$query = $this->db->get('users');
		if($query->num_rows() > 0)
			{
				foreach($query->result() as $row)
					{
						$data[] = $row;
					}
				
				return $data;
			}
	}
}