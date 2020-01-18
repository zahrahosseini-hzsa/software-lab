<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dastband1_model extends CI_Model {
	
		public function insert_dastband1($data)
	{
		//print_r($_POST);
		$sql="insert into nazarat(username,item-id,text,img) values 
		('".$data['user_name']."','".$data['code']."','".$data['text']."','".$data['img']."') ";
		
		$this->db->query($sql);
	
	}
	
	
	
	
	
}