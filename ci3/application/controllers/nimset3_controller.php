<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nimset3_controller extends CI_Controller {
	
		public function nimset3()
	{
		$this->load->view('nimset3.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('dastband1_model');
		$this->dastband1_model->insert_dastband1($_POST);
		
	}
}