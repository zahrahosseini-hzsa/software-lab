<?php 
session_start();
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sefaresh_mahsul_model extends CI_Model {
	
		public function sefaresh_mahsul($data)
	{
		//print_r($_POST);
		$sql="insert into kharid(username,item-id,price,img) values 
		('".$_SESSION['user_name']."','".$data['code']."','".$data['price']."','".$data['img']."') ";
		
		$this->db->query($sql);
	
	}
	
	
	
	
	
}