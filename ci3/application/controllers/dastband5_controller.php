<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dastband5_controller extends CI_Controller {
	
		public function dastband5()
	{
		$this->load->view('dastband5.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('dastband5_model');
		$this->dastband1_model->insert_dastband5($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
}