<?php
class Shop extends CI_Controller {
	
	public function index() {
		$this->output->enable_profiler(TRUE);
		$this->load->model('Products_model');
		
		$data['products'] = $this->Products_model->get_all();
		
		$this->load->view('products', $data);
	}
	
	public function add() {
		
		$this->load->model('Products_model');
		
		$product = $this->Products_model->get($this->input->post('id'));
		
		$insert = array(
			'id' => $this->input->post('id'),
			'qty' => 1,
			'price' => $product->price,
			'name' => $product->name
		);
		if ($product->option_name) {
			$insert['options'] = array(
				$product->option_name => $product->option_values[$this->input->post($product->option_name)]
			);
		}
		
		$this->cart->insert($insert);
	
		redirect('shop');
		
	}
	
	public function remove($rowid) {
		
		$this->cart->update(array(
			'rowid' => $rowid,
			'qty' => 0
		));
		
		redirect('shop');
		
	}
	
}
