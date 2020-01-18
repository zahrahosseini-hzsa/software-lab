<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class dastband1_model extends CI_Model {
	
		public function insert_dastband1($data)
	{
		//print_r($_POST);
		$sql="insert into nazarat(user_name,text,img) values 
		('".$data['user_name']."','".$data['text']."','".$data['img']."') ";
		
		$this->db->query($sql);
	
	}
	
	
	
	
	
}