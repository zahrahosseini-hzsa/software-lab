<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gardanband3_controller extends CI_Controller {
	
		public function gardanband3()
	{
		$this->load->view('gardanband3.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('dastband1_model');
		$this->dastband1_model->insert_dastband1($_POST);
		
	}
}