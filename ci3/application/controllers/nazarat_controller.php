
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nazarat_controller extends CI_Controller {
	
		public function nazarat()
	{
		
		$this->load->model('nazarat_model');
		$data['info']=$this->nazarat_model->select_nazarat();
		$this->load->view('nazarat.php',$data);
		
	}
	
	
}