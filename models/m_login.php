<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_login extends CI_Model{	
	
	public function proseslogin($username, $password){	

		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get('admin')->row();		
	}	
}

 ?>