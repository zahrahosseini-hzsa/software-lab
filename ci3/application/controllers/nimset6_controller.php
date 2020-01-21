<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nimset6_controller extends CI_Controller {
	
		public function nimset6()
	{
		$this->load->view('nimset6.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('nimset6_model');
		$this->dastband1_model->insert_nimset6($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
}