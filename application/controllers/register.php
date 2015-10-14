<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	
	public function __construct()
		{
			parent::__construct();
			$this->is_logged_in();
		}
	
	public function index()
		{
			$this->load->model('register_model');
			$data['title'] = "Application :: Register Page";		
			
			$config['base_url'] = 'http://localhost/app/register/index';
			$config['total_rows'] = $this->db->get('register')->num_rows();
			$config['per_page'] = 10;
			$config['num_links'] = 20;
			$config['full_tag_open'] = '<div id="pagination">';
			$config['full_tag_close'] = '</div>';
			
			$this->pagination->initialize($config);
			
			if($query = $this->register_model->get_records($config['per_page'],'1'))
			{
				$data['records'] = $query;
			}
			
			$data['main_content'] = 'register_v';
			$this->load->view('includes/template', $data);
		}
		
	public function create()
	{
		$this->load->model('register_model');
		
		$this->form_validation->set_rules('name','Name', 'trim|required');
		$this->form_validation->set_rules('state','State', 'trim|required');
		$this->form_validation->set_rules('city','City', 'trim|required');
		$this->form_validation->set_rules('phone','Phone Number', 'trim|required');
			
		if($this->form_validation->run()==FALSE)
		{
			$this->index();
		}
		else
		{
			$data = array(
					'name' => $this->input->post('name'),
					'state' => $this->input->post('state'),
					'city' => $this->input->post('city'),
					'phone' => $this->input->post('phone')
			);
			
			$this->register_model->add_records($data);
			$this->index();
		}
	}
	
	public function update()
	{
		$this->load->model('register_model');
		$data = array(
			'name' => 'Muthu',
				'state' => 'Oklohama',
				'city' => 'Norman',
				'phone' => '4489901887'
		);
		
		$this->register_model->update_record($data);
		$this->index();
	}
	public function delete()
	{
		$this->load->model('register_model');
		$this->register_model->delete_row();
		$this->index();
	}
	
	public function is_logged_in()
	{
			
		$is_logged_in = $this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true)
		{
			redirect('login/index');
		}
	}
}