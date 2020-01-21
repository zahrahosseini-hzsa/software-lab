<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class etelaat_shakhsi_controller extends CI_Controller {
	
		public function etelaat_shakhsi()
	{
		$this->load->view('etelaat-shakhsi.php');
		
	}
			public function check_data()
	{
		
		$this->load->model('personal_information_model');
		$this->personal_information_model->insert_personal($_POST);
		
	}
	
}