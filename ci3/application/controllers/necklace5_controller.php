<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class necklace5_controller extends CI_Controller {
	
		public function necklace5()
	{
		$this->load->view('necklace5.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('dastband1_model');
		$this->dastband1_model->insert_dastband1($_POST);
		
	}
}