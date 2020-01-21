<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dastband3_controller extends CI_Controller {
	
		public function dastband3()
	{
		$this->load->view('dastband3.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('dastband3_model');
		$this->dastband1_model->insert_dastband3($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
}