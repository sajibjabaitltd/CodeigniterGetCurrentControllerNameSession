<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->session->set_userdata('user_data_value', 'Sajib Kumar Barai');
		$current_controller_name = $this->router->fetch_class();
		$data['current_controller_name'] = $current_controller_name;
		$this->load->view('welcome_message', $data);
	}
}
