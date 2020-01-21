<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nimset1_controller extends CI_Controller {
	
		public function nimset1()
	{
		$this->load->view('nimset1.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('nimset1_model');
		$this->dastband1_model->insert_nimset1($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
	
}