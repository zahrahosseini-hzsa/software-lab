<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nimset2_controller extends CI_Controller {
	
		public function nimset2()
	{
		$this->load->view('nimset2.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('nimset2_model');
		$this->dastband1_model->insert_nimset2($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
}