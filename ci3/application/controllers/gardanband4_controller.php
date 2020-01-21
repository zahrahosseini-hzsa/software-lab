<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gardanband4_controller extends CI_Controller {
	
		public function gardanband4()
	{
		$this->load->view('gardanband4.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('gardanband4_model');
		$this->gardanband4_model->insert_gardanband4($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
}