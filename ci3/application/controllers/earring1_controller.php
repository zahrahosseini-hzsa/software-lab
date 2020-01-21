<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class earring1_controller extends CI_Controller {
	
		public function earring1()
	{
		$this->load->view('earring1.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('earring1_model');
		$this->dastband1_model->insert_earring1($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
}