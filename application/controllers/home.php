<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

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
			$this->load->view('HandF/header.php',$data);
			$this->load->view('home_v',$data);
			$this->load->view('HandF/footer.php');
		}
}