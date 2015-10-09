<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}
	
	public function index()
		{
			$this->dashboard();
		}
	public function dashboard()
		{
			//Model Section
			$this->load->model('home_model');
			$data['users'] = $this->home_model->getValue();
			$data['title'] = "Application :: Dashboard Page";
			
			//View Section
			$data['main_content'] = 'home_v';
			$this->load->view('includes/template', $data);
		}
		
	public function enter()
	{
		$data['main_content'] = 'enter_v';
		$this->load->view('includes/template', $data);
	}
	public function is_logged_in()
		{
			
			$is_logged_in = $this->session->userdata('is_logged_in');
			if(!isset($is_logged_in) || $is_logged_in != true)
			{
				echo "inside fun";
				redirect('login/index');
			}
		}
}