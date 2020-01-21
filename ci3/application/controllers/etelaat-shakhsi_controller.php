<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class etelaat_shakhsi_controller extends CI_Controller {
	
		public function etelaat_shakhsi()
	{
		
		$this->load->model('etelaat_shakhsi');
		$data['info']=$this->etelaat_shakhsi_model->select_etelaat-shakhsi();
		$this->load->view('etelaat-shakhsi',$data);
		
	}
			public function check_data()
	{
		
		$this->load->model('personal_information_model');
		$this->personal_information_model->insert_personal($_POST);
		
	}
	
}