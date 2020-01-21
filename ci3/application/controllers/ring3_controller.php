<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ring3_controller extends CI_Controller {
	
		public function ring3()
	{
		$this->load->view('ring3.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('ring3_model');
		$this->dastband1_model->insert_ring3($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
}