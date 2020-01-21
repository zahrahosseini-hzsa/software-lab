<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class earring3_controller extends CI_Controller {
	
		public function earring3()
	{
		$this->load->view('earring3.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('earring3_model');
		$this->dastband1_model->insert_earring3($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
}