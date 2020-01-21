<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class necklace4_controller extends CI_Controller {
	
		public function necklace4()
	{
		$this->load->view('necklace4.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('necklace4_model');
		$this->dastband1_model->insert_necklace4($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
}