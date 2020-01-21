<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class necklace1_controller extends CI_Controller {
	
		public function necklace1()
	{
		$this->load->view('necklace1.php');
		
	}
		public function check_data()
	{
		
		$this->load->model('necklace1_model');
		$this->necklace1_model->insert_necklace1($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
	
}