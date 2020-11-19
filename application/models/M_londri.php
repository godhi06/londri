<?php
class M_londri extends CI_model
{

	
	public $admin = 'admin';
	public $table = 'pelanggan';
	
	public $kiloan = 'kiloan';
	public $satuan = 'satuan';
	public $cetak='kiloan';
	public $nota ='kiloan';
	public $barang ='barang';
	


	public function registrasi($data,$table)  
		{  
		$this->db->insert($table, $data);  
		}  

	public function cariDataOrder()
	{
		
		$cari = $this->input->get('keyword', TRUE);
		$data = $this->db->query("SELECT * from kiloan where Kode_order like '%$cari%' ");
		return $data->result();
		//return data admin that has been searched
	}

	public function cari()
	{
		
		$cari = $this->input->get('keyword', TRUE);
		$data = $this->db->query("SELECT * from satuan where Kode_order like '%$cari%' ");
		return $data->result();
		//return data admin that has been searched
	}


	public function buat_kode()   {
		  $this->db->select('RIGHT(pelanggan.Id_pelanggan,4) as kode', FALSE);
		  $this->db->order_by('Id_pelanggan','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('pelanggan');      //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $kode = intval($data->kode) + 1;    
		  }
		  else {      
		   //jika kode belum ada      
		   $kode = 1;    
		  }
		  $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
		  $kodejadi = "USR-".$kodemax;   
		  return $kodejadi;  
	}

	public function kode_kiloan()   {
		  $this->db->select('RIGHT(kiloan.Kode_order,4) as kode', FALSE);
		  $this->db->order_by('Kode_order','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('kiloan');      //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $kode = intval($data->kode) + 1;    
		  }
		  else {      
		   //jika kode belum ada      
		   $kode = 1;    
		  }
		  $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
		  $kodejadi = "LK-".$kodemax;   
		  return $kodejadi;  
	}

	public function kode_satuan()   {
		  $this->db->select('RIGHT(satuan.Kode_order,4) as kode', FALSE);
		  $this->db->order_by('Kode_order','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('satuan');      //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $kode = intval($data->kode) + 1;    
		  }
		  else {      
		   //jika kode belum ada      
		   $kode = 1;    
		  }
		  $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
		  $kodejadi = "LS-".$kodemax;   
		  return $kodejadi;  
	}


	public function beli($id)
	{
		$this->cart->insert($id);
	}

	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	public function ceklogin($pelanggan,$where)
	{
			
		return $this->db->get_where($pelanggan,$where);
	
	}

	
		public function ikilo()
		{

			$post = $this->input->post();
		$berat = $post["berat"];
		
		$sekilo = 7000;
		$totalharga = $sekilo * $berat;
		

			$kodek = $this->input->post('kode_kiloan');
$user = $this->input->post('username');
  $nama = $this->input->post('nama');
  $alamat = $this->input->post('alamat');
   $hp = $this->input->post('nohp');

  $masuk = date('Y-m-d 00:00:00', strtotime($this->input->post('masuk')));
  $ambil = date('Y-m-d 00:00:00', strtotime($this->input->post('ambil')));
  

$data = [
'Id_kiloan' => "",
'Kode_order' => $kodek,
'jenis_layanan' => "Antar Jemput",
   'username' => $user,
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




 		public function getAllKiloan()
	{
		//use query builder to get data table "kiloan"
		$kilo = $this->db->get('kiloan');
		return $kilo->result_array();
	}

function pemesan($where,$table){
   return $this->db->get_where($table,$where);
}	


function satuan($where,$table){
   return $this->db->get_where($table,$where);
}	

function pelanggan(){
   $this->db->select("*");
   $this->db->from('pelanggan');
   return $this->db->get();
}

public function isatu()
		{
				$kode = $this->input->post('kode_satuan');

$user = $this->input->post('username');
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
'jenis_layanan' => "Antar Jemput",
   'username' => $user,
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

	public function getAllBarang()
	{
		//use query builder to get data table "kiloan"
		$barang = $this->db->get('barang');
		return $barang->result_array();
	}


	public function view(){
		$cetak = $this->db->get('kiloan');
		return $cetak->result_array();
	}

	public function getKiloanById($id)
	{
		//get data kiloan based on id 
		return $this->db->get_where($this->kiloan, ['Id_Kiloan' => $id])->row();
	}


	function notak($where,$table){
		return $this->db->get_where($table,$where);
	}

	function notas($where,$table){
		return $this->db->get_where($table,$where);
	}
	

}

?>