<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class earring5_controller extends CI_Controller {
	
		public function earring5()
	{
		$this->load->view('earring5.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('earring5_model');
		$this->earring5_model->insert_earring5($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
	
}