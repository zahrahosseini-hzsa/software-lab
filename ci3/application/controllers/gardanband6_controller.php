<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gardanband6_controller extends CI_Controller {
	
		public function gardanband6()
	{
		$this->load->view('gardanband6.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('gardanband6_model');
		$this->gardanband6_model->insert_gardanband6($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
}