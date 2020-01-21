<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class register_controller extends CI_Controller {
	
		public function register()
	{
		$this->load->view('register.php');
		
	}
				public function check_data()
	{
		
		$this->load->model('personal_information_model');
		$this->personal_information_model->insert_personal($_POST);
		
	}
	
	
}