<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dastband1_controller extends CI_Controller {
	
			public function dastband1()
	{
		  $this->load->view('dastband1');
		//$this->load->model('contactus_model');
	    //$this->contactus_model->insert_contactus($_POST);
		
	}
		public function check_data()
	{
		
		$this->load->model('dastband1_model');
		$this->dastband1_model->insert_dastband1($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
	
	
}