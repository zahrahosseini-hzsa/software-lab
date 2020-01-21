<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ring6_controller extends CI_Controller {
	
		public function ring6()
	{
		$this->load->view('ring6.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('ring6_model');
		$this->dastband1_model->insert_ring6($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
}