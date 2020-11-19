<?php

class M_barang extends CI_Model{
	
	public $table = 'barang';
	
	public function tampil_data(){
		return $this->db->get('barang')->result();
	}
	
	public function insert($image,$id,$jdl,$ktrngn){
		$data = array(
			'Id_Prosedur' => $id,
			'Id_Admin' => "pdam456",
            'Judul_Prosedur' => $jdl,
            'Keterangan' => $ktrngn,
            'Gambar' => $image,
			);
		$result=$this->db->insert('prosedur',$data);
		return $result;
	}
	
	public function insert2($data){
		$result=$this->db->insert('barang',$data);
		return $result;
	}
	
	
	
	function hapus($id_barang){
        return $this->db->delete($this->table, array("Id_barang" => $id_barang));
	}
		
	
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	public function cariDatabarang($keyword)
	{
		    $this->db->like('Nama_barang', $keyword);       
		     $result = $this->db->get('barang')->result();
		     return $result;  //ini belum di return tadi
		
	}
}