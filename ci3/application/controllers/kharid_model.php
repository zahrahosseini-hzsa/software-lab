<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class kharid_model extends CI_Model {
	
		public function select_kharid()
	{
		$sql='select id,price,img from kharid';
		
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	
	
	
	
	
}