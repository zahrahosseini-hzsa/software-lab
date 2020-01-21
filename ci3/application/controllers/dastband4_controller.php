<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dastband4_controller extends CI_Controller {
	
		public function dastband4()
	{
		$this->load->view('dastband4.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('dastband4_model');
		$this->dastband1_model->insert_dastband4($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
}