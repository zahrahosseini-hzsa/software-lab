<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ring2_controller extends CI_Controller {
	
		public function ring2()
	{
		$this->load->view('ring2.php');
		
	}
		public function check_data()
	{
		
		$this->load->model('ring2_model');
		$this->dastband1_model->insert_ring2($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
	
}