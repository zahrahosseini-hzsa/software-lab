<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class earring1_controller extends CI_Controller {
	
		public function earring1()
	{
		$this->load->view('earring1.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('dastband1_model');
		$this->dastband1_model->insert_dastband1($_POST);
		
	}
}