<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class news_controller extends CI_Controller {
	
		public function news()
	{
		$this->load->view('news.php');
		
	}
	
	
}