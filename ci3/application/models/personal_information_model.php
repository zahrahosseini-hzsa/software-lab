<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class personal_information_model extends CI_Model {
	
		public function insert_personal($data)
	{
		$sql="insert into personal_information(username,fname,lname,jensiyat,city,address,phone-number,mobile,email,pass) values 
		('".$data['username']."','".$data['fname']."','".$data['lname']."','".$data['sex']."','".$data['city']."','".$data['address']."','".$data['phone-number']."','".$data['mobile']."','".$data['email']."'
		'".$data['pass']."','".$data['pass_repeat']."') ";
		
		$this->db->query($sql);
	
	}
	
	
	
	
	
}