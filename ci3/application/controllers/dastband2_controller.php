<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dastband2_controller extends CI_Controller {
	
		public function dastband2()
	{
		$this->load->view('dastband2.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('dastband1_model');
		$this->dastband1_model->insert_dastband1($_POST);
		
	}
	
	
}