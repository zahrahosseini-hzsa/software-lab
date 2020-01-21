<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class necklace6_controller extends CI_Controller {
	
		public function necklace6()
	{
		$this->load->view('necklace6.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('necklace6_model');
		$this->dastband1_model->insert_necklace6($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
}