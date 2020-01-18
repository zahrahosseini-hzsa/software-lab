<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ring4_controller extends CI_Controller {
	
		public function ring4()
	{
		$this->load->view('ring4.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('dastband1_model');
		$this->dastband1_model->insert_dastband1($_POST);
		
	}
}