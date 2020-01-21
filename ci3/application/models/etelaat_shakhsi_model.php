<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class etelaat_shakhsi_model extends CI_Model {
	
		public function select_etelaat_shakhsi()
	{
		$sql='select * from personal_information';
		
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	
	
	
	
	
}