<?php

class M_admin extends CI_Model{
	public $table = 'admin';

	public function ceklogin($table,$where)
	{
		return $this->db->get_where($table,$where);
	}
	
    function getAllAdmin($user){
		return $this->db->get_where('admin', array('Username' => $user))->row();
	}




	function getAdmin($where,$table){
    	return $this->db->get_where($table,$where);
    	}
    }

