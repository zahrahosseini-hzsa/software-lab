<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dastband6_controller extends CI_Controller {
	
		public function dastband6()
	{
		$this->load->view('dastband6.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('dastband6_model');
		$this->dastband1_model->insert_dastband6($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
}