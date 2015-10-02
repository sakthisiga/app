<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
	
	public function __construct()
		{
			parent::__construct();
		}
	
	public function index()
		{
			
			$data['title'] = "Application :: Login Page";
			$this->load->view('login_form', $data);
		}
	public function validate()
	{
			$this->load->model("login_model");
			$query = $this->login_model->validate();
			
			if($query) // if the user's credentials validated...
			{
				$data = array(
						'username' => $this->input->post('username'),
						'is_logged_in' => true
				);
				$this->session->set_userdata($data);
				redirect('home/dashboard');
			}
			else // incorrect username or password
			{
				$this->index();
			}
	}
	
	public function signup()
	{
		$data['title'] = "Application :: Signup Form";
		$this->load->view('signup_form', $data);
	}
	
	public function create_login()
	{
		$this->form_validation->set_rules('first_name', 'Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('ssn', 'SSN', 'trim|required');
		$this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2', 'Password Confirmation', 'trim|required|matches[password]');
		
		
		if($this->form_validation->run() == FALSE)
		{
			$this->signup();
		}
		
		else
		{
			$this->load->model('login_model');
				
			if($query = $this->login_model->create_member())
			{
				$data['title'] = 'Application :: Signup Page';
				$this->load->view('signup_successful', $data);
			}
			else
			{
				$this->load->view('signup_form');
			}
		}
	}
	
	public function logout()
	{
	    $this->session->sess_destroy();
	    $this->index();
	}
}