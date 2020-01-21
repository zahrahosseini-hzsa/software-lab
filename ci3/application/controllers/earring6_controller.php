<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class earring6_controller extends CI_Controller {
	
		public function earring6()
	{
		$this->load->view('earring6.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('earring6_model');
		$this->earring6_model->insert_earring6($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
}