<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gardanband3_controller extends CI_Controller {
	
		public function gardanband3()
	{
		$this->load->view('gardanband3.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('gardanband3_model');
		$this->gardanband3_model->insert_gardanband3($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
}