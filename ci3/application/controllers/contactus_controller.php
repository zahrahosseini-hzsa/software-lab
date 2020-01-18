<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contactus_controller extends CI_Controller {
	
		public function contactus()
	{
		$this->load->view('contactus');
		$this->load->model('contactus_model');
	    $this->contactus_model->insert_contactus($_POST);
		
	}
	
	
}