<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ring1_controller extends CI_Controller {
	
		public function ring1()
	{
		$this->load->view('ring1.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('ring1_model');
		$this->dastband1_model->insert_ring1($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
	
}