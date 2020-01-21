<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ring4_controller extends CI_Controller {
	
		public function ring4()
	{
		$this->load->view('ring4.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('ring4_model');
		$this->dastband1_model->insert_ring4($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
}