<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dbtest extends CI_Controller {
	var $gallery_path;
	var $gallery_path_url;
	
	public function __construct()
		{
			parent::__construct();
		}
	
	public function index()
		{
			$this->db->where('username', 'sakthisiga');
			$this->db->where('password', md5('password'));
			$query = $this->db->get('login');
			//$sql = "select * from login where username='sakthisiga' and password=md5('password')";
			//$query = $this->db->query($sql);
		
			if($query->num_rows() == 1)
			{
				echo "found";
			}
			else
			{
				echo "not found";
			}
		}
		
	public function disp()
	{
		
		
		echo $this->gallery_path = realpath(APPPATH);
		echo "<br>";
		echo $this->gallery_path_url = base_url();
	}
		
}