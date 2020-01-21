<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class necklace3_controller extends CI_Controller {
	
		public function necklace3()
	{
		$this->load->view('necklace3.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('necklace3_model');
		$this->necklace3_model->insert_necklace3($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
	
}