<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dastband2_controller extends CI_Controller {
	
		public function dastband2()
	{
		$this->load->view('dastband2.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('dastband2_model');
		$this->dastband1_model->insert_dastband1($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
	
	
}