<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dastband5_controller extends CI_Controller {
	
		public function dastband5()
	{
		$this->load->view('dastband5.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('dastband1_model');
		$this->dastband1_model->insert_dastband1($_POST);
		
	}
}