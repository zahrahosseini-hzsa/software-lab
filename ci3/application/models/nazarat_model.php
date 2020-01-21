<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class nazarat_model extends CI_Model {
	
		public function select_nazarat()
	{
		$sql='select id,item_id,text,img from nazarat';
		
		$query=$this->db->query($sql);
		return $query->result_array();
	}
	
	
	
	
	
}