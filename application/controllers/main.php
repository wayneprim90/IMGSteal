<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {


	public function index()
	{
		$data = array(
			"view" => "home_view"
		);	
		$this->load->view('main_template', $data);
	}

	public function get_image() {
		$data = array(
			"view" => "results_view",
			"url" => $_POST['url']
		);
		$this -> load -> view("main_template", $data);
	}
	public function download() {
	
	}
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */