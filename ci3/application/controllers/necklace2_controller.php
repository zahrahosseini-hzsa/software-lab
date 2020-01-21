<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class necklace2_controller extends CI_Controller {
	
		public function necklace2()
	{
		$this->load->view('necklace2.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('necklace2_model');
		$this->necklace2_model->insert_necklace2($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
	
}