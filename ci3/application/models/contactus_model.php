<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contactus_model extends CI_Model {
	
		public function insert_contactus($data)
	{
		$sql="insert into contactus(fname,lname,email,phone,subject,text) values 
		('".$data['fname']."','".$data['lname']."','".$data['email']."','".$data['phone']."','".$data['subject']."',
		'".$data['text']."') ";
		
		$this->db->query($sql);
	
	}
	
	
	
	
	
}