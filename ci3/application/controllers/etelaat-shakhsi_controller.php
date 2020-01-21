<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class etelaat_shakhsi_controller extends CI_Controller {
	
		public function etelaat_shakhsi()
	{
		
		$this->load->model('etelaat_shakhsi_model');
		$data['info']=$this->etelaat_shakhsi->select_etelaat-shakhsi();
		$this->load->view('etelaat-shakhsi',$data);
		
	}

	
}