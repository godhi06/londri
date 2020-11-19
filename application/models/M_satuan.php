<?php

class M_satuan extends CI_Model{
	
	public $table = 'satuan';
	public $satuan = 'satuan';
	
	public function tampil_satuan(){
		$informasi2 = $this->db->query("SELECT * FROM satuan WHERE jenis_layanan = 'Antar Jemput' ");
        return $informasi2->result_array();
	}

	public function tampil_satuan_datang(){
		$informasi2 = $this->db->query("SELECT * FROM satuan WHERE jenis_layanan = '' ");
        return $informasi2->result_array();
	}


	

	
public function isatu()
		{
				$kode = $this->input->post('kode_satuan');

  $nama = $this->input->post('nama');
  $alamat = $this->input->post('alamat');
  $nosambungan = $this->input->post('telp');
  $kuantitas = $this->input->post('kuantitas');
  $harga = $this->input->post('harga');
  $masuk = date('Y-m-d 00:00:00', strtotime($this->input->post('masuk')));
  $ambil = date('Y-m-d 00:00:00', strtotime($this->input->post('ambil')));
  
  

$data = [
'Id_satuan' => "",
'Kode_order' => $kode,
   'Nama' => $nama,
   'Alamat' => $alamat,
   'No_Hp' => $nosambungan,
   'Tanggal_masuk' =>$masuk,
   'Tanggal_ambil' =>$ambil,
   'Status' => "Belum",
   'Kuantitas' =>$kuantitas,
   'Total_harga' =>$harga,
		];

		//use query builder to insert $data to table "admin"
		$this->db->insert($this->satuan, $data);

 		}



	
	
	function hapus($id_satuan){
        return $this->db->delete($this->table, array("Id_satuan" => $id_satuan));
	}
		
	
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
	public function cariDatasatuan()
	{
		   
		   $keyword = $this->input->post('keyword', true);
		
		     $this->db->select('*');
		$this->db->from('satuan');
		$this->db->where('jenis_layanan','Antar Jemput');
		if (!empty($keyword)){
			$this->db->like('nama', $keyword);

			
		}
		$this->db->order_by('nama');
		$getData = $this->db->get('');
		return $getData->result_array();
		
		
	}

	public function cariDatasatuandatang()
	{
		   
		   $keyword = $this->input->post('keyword', true);
		
		     $this->db->select('*');
		$this->db->from('satuan');
		$this->db->where('jenis_layanan','');
		if (!empty($keyword)){
			$this->db->like('nama', $keyword);

			
		}
		$this->db->order_by('nama');
		$getData = $this->db->get('');
		return $getData->result_array();
		
		
	}
}