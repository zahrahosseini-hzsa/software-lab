<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gardanband5_controller extends CI_Controller {
	
		public function gardanband5()
	{
		$this->load->view('gardanband5.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('gardanband5_model');
		$this->gardanband5_model->insert_gardanband5($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
}