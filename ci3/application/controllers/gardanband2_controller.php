<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class gardanband2_controller extends CI_Controller {
	
		public function gardanband2()
	{
		$this->load->view('gardanband2.php');
		
	}
	
		public function check_data()
	{
		
		$this->load->model('gardanband2_model');
		$this->gardanband2_model->insert_gardanband2($_POST);
		
	}
	public function sefaresh()
	{
		
		$this->load->model('sefaresh_mahsul_model');
		$this->sefaresh_mahsul_model->sefaresh_mahsul($_POST);
		
	}
	
}