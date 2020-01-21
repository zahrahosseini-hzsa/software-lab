<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class earring4_controller extends CI_Controller {
	
		public function earring4()
	{
		$this->load->view('earring4.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('earring4_model');
		$this->earring4_model->insert_earring4($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
}