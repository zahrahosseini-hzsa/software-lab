<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class earring2_controller extends CI_Controller {
	
		public function earring2()
	{
		$this->load->view('earring2.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('earring2_model');
		$this->dastband1_model->insert_earring2($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
}