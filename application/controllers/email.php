<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class email extends CI_Controller {
	
	public function __construct()
		{
			parent::__construct();
		}

	public function index()
		{
			
			$this->email->set_newline("\r\n");
			
			$this->email->from('sakthicodeigniter@gmail.com', "Sakthivel Deivasigamani");
			$this->email->to('sakthisiga@gmail.com');
			$this->email->subject('Codeigniter: Test Email');
			$this->email->message('This is the first email from Codeigniter Tutorial');
			
			
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