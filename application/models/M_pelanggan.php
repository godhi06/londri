<?php

class M_pelanggan extends CI_Model{
	
	public $_table = 'pelanggan';
	
	public function tampil_data(){
		return $this->db->get('pelanggan')->result();
	}
	
	public function insert2($data){
		$result=$this->db->insert('barang',$data);
		return $result;
	}
	
	public function getById($id_info)
    {
        return $this->db->get_where($this->_table, ["Id_Prosedur" => $id_info])->row();
    }
	
	function hapus($id_barang){
        return $this->db->delete($this->_table, array("Id_barang" => $id_barang));
	}
		private function _deleteImage($id_info)
		{
			$data = $this->getById($id_info);
			if ($data->Gambar != "default.jpg") {
				$filename = explode(".", $data->Gambar)[0];
				return array_map('unlink', glob(FCPATH."./assets/upload/prosedur/$filename.*"));
			}
	}
	
	function hapus_gambar($id_info){
		$this->_deleteImage($id_info);
	}
	
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	public function cariDatapelanggan($keyword)
	{
		    $this->db->like('nama_lengkap', $keyword);       
		     $result = $this->db->get('pelanggan')->result();
		     return $result;  //ini belum di return tadi
		
	}
}