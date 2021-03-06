<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class email extends CI_Controller {
	
	public function __construct()
		{
			parent::__construct();
		}
	
	public function index()
		{
			$data['title'] = "Application :: Contact Us Page";
			
			$data['main_content'] = 'contactus';
			$this->load->view('includes/template', $data);	
		}
	public function send()
		{
			$data['title'] = "Application :: Contact Us Page";
			
			$this->load->library('form_validation');
			$this->form_validation->set_rules('name','Name', 'trim|required');
			$this->form_validation->set_rules('email','Email Address', 'trim|required|valid_email');
			$this->form_validation->set_rules('message','Message', 'trim|required');
			
			if($this->form_validation->run()==FALSE)
			{
				$this->index();
			}
			else
			{
				$name = $this->input->post('name');
				$email = $this->input->post('email');
				$message = $this->input->post('message');
				
				$this->email->set_newline("\r\n");
					
				$this->email->from('sakthicodeigniter@gmail.com', "Sakthivel Deivasigamani");
				$this->email->to($email);
				$this->email->subject('Codeigniter: Test Mail');
				$this->email->message('Hi '.$name.','."\n".$message);
					
					
				$path = $this->config->item('server_root');
				$file = $path . '/app/attachments/sample.txt';
					
				$this->email->attach($file);
					
				if($this->email->send())
				{
					echo "Your email has been sent!!!";
				}
				else
				{
					show_error($this->email->print_debugger());
				}
				
			}
		}

}