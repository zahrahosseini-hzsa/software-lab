<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ring5_controller extends CI_Controller {
	
		public function ring5()
	{
		$this->load->view('ring5.php');
		
	}
		public function check_data()
	{
		
		$this->load->model('ring5_model');
		$this->dastband1_model->insert_ring5($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
	
}