<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class earring2_controller extends CI_Controller {
	
		public function earring2()
	{
		$this->load->view('earring2.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('dastband1_model');
		$this->dastband1_model->insert_dastband1($_POST);
		
	}
}