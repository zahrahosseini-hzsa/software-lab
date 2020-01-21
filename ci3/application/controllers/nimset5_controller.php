<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nimset5_controller extends CI_Controller {
	
		public function nimset5()
	{
		$this->load->view('nimset5.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('nimset5_model');
		$this->dastband1_model->insert_nimset5($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
}