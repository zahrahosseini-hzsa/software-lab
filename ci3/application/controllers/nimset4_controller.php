<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nimset4_controller extends CI_Controller {
	
		public function nimset4()
	{
		$this->load->view('nimset4.php');
		
	}
		public function check_data()
	{
		
		$this->load->model('nimset4_model');
		$this->dastband1_model->insert_nimset4($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
	
}