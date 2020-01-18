<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class necklace6_controller extends CI_Controller {
	
		public function necklace6()
	{
		$this->load->view('necklace6.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('dastband1_model');
		$this->dastband1_model->insert_dastband1($_POST);
		
	}
}