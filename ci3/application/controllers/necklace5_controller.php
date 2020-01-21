<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class necklace5_controller extends CI_Controller {
	
		public function necklace5()
	{
		$this->load->view('necklace5.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('necklace5_model');
		$this->dastband1_model->insert_necklace5($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
}