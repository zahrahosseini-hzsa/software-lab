<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nimset2_controller extends CI_Controller {
	
		public function nimset2()
	{
		$this->load->view('nimset2.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('dastband1_model');
		$this->dastband1_model->insert_dastband1($_POST);
		
	}
}