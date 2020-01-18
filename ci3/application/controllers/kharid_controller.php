<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class kharid_controller extends CI_Controller {
	
		public function kharid()
	{
		$this->load->model('kharid_model');
		$data['info']=$this->kharid_model->select_kharid();
		$this->load->view('kharid.php',$data);
		
	}
	
	
	
	
	
}