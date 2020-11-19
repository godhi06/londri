<?php

class M_info extends CI_Model{
	
	private $_table = "informasi";
	public $informasi ='informasi';
	
	public function tampil_data(){
		$informasi2 = $this->db->query("SELECT * FROM informasi WHERE Status='Draft'");
        return $informasi2->result_array();
	}
	
		
}