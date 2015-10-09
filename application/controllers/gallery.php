<?php
class Gallery extends CI_Controller {
	
	public function __construct()
		{
			parent::__construct();
		}
	
	public function index() {
		
		$this->load->model('Gallery_model');
		
		if ($this->input->post('upload')) {
			$this->Gallery_model->do_upload();
		}
		
		$data['images'] = $this->Gallery_model->get_images();
		
		$data['main_content'] = 'gallery';
		$this->load->view('includes/template', $data);
		
		
	}
	
}
