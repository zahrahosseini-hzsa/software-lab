<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ring3_controller extends CI_Controller {
	
		public function ring3()
	{
		$this->load->view('ring3.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('dastband1_model');
		$this->dastband1_model->insert_dastband1($_POST);
		
	}
}