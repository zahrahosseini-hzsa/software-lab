<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nimset3_controller extends CI_Controller {
	
		public function nimset3()
	{
		$this->load->view('nimset3.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('nimset3_model');
		$this->dastband1_model->insert_nimset3($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
}