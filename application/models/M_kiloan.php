<?php

class M_kiloan extends CI_Model{
	
	public $table = 'kiloan';
	public $kiloan = 'kiloan';
	
	public function tampil_kiloan(){
		$informasi2 = $this->db->query("SELECT * FROM kiloan WHERE jenis_layanan = 'Antar Jemput' ");
        return $informasi2->result_array();
	}

	public function tampil_kiloan_datang(){
		$informasi2 = $this->db->query("SELECT * FROM kiloan WHERE jenis_layanan = '' ");
        return $informasi2->result_array();
	}

	

	public function ikilo()
		{

			$post = $this->input->post();
		$berat = $post["berat"];

		
		$sekilo = 7000;
		$totalharga = $sekilo * $berat;

		

			$kodek = $this->input->post('kode_kiloan');

  $nama = $this->input->post('nama');
  $alamat = $this->input->post('alamat');
  $hp = $this->input->post('nohp');
  
  $masuk = date('Y-m-d 00:00:00', strtotime($this->input->post('masuk')));
  $ambil = date('Y-m-d 00:00:00', strtotime($this->input->post('ambil')));
  

$data = [
'Id_kiloan' => "",
'Kode_order' => $kodek,

   
   'nama' => $nama,
   'Alamat' => $alamat,
   'No_Hp' => $hp,
   'Tanggal_masuk' =>$masuk,
   'Tanggal_ambil' =>$ambil,
   'Status' => "Belum",
   'Total_berat_cucian' =>$berat,
   'Harga' =>$totalharga,
		];

		//use query builder to insert $data to table "admin"
		$this->db->insert($this->kiloan, $data);

 		}
	
	function hapus($id_kiloan){
        return $this->db->delete($this->table, array("Id_kiloan" => $id_kiloan));
	}
		
	
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

	public function cariDatakiloan()
	{
		   
		   $keyword = $this->input->post('keyword', true);
		
		     $this->db->select('*');
		$this->db->from('kiloan');
		$this->db->where('jenis_layanan','Antar Jemput');
		if (!empty($keyword)){
			$this->db->like('nama', $keyword);

			
		}
		$this->db->order_by('nama');
		$getData = $this->db->get('');
		return $getData->result_array();
		
		
	}

	public function cariDatakiloandatang()
	{
		$keyword = $this->input->post('keyword', true);
		
		     $this->db->select('*');
		$this->db->from('kiloan');
		$this->db->where('jenis_layanan','');
		if (!empty($keyword)){
			$this->db->like('nama', $keyword);

			
		}
		$this->db->order_by('nama');
		$getData = $this->db->get('');
		return $getData->result_array();   
		
	}
		
}