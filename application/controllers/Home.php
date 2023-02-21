<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$current_controller_name = $this->router->fetch_class();
		if ($current_controller_name != 'welcome') {
			$this->session->unset_userdata('user_data_value');
		}
		$data['current_controller_name'] = $current_controller_name;
		$this->load->view('welcome_message', $data);
	}
}
