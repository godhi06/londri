<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lihatsatuan extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
			$this->load->library('session'); 
			$this->load->model('M_satuan');
	}



	
	 
	
	
	
	function hapus($id_satuan){
		$this->M_satuan->hapus($id_satuan);
		redirect('admin/tampilsatuan');
	}
	
	function edit($id_satuan)
	{
		$where = array('Id_satuan' => $id_satuan);
		$data['satuan'] = $this->M_satuan->edit_data($where,'satuan')->result();
		$this->load->view('templates/header_admin2');
		$this->load->view('admin/editsatuan',$data);
		
	}

	function editdatang($id_satuan)
	{
		$where = array('Id_satuan' => $id_satuan);
		$data['satuan'] = $this->M_satuan->edit_data($where,'satuan')->result();
		$this->load->view('templates/header_admin2');
		$this->load->view('admin/editsatuandatang',$data);
		
	}
	
	function update()
	{
		 //encrypt file name
	
		$data = array(
                'Id_satuan' => $this->input->post('id'),
                'username' => $this->input->post('username'),
                'Alamat' => $this->input->post('alamat'),
                'No_Hp' => $this->input->post('no_hp'),
                'Tanggal_masuk' => $this->input->post('tanggal_masuk'),
                'Tanggal_ambil' => $this->input->post('tanggal_ambil'),
                'Status' => $this->input->post('tipe'),
                'Kuantitas' => $this->input->post('total_kuantitas'),
                'Total_Harga' => $this->input->post('total_harga'),
            );

 
	$where = array(
		'Id_satuan' => $this->input->post('id'),
	);
 
	$this->M_satuan->update_data($where,$data,'satuan');
	redirect('admin/tampilsatuan');	
	}

	function updatedatang()
	{
		 //encrypt file name
	
		$data = array(
                'Id_satuan' => $this->input->post('id'),
                
                'Alamat' => $this->input->post('alamat'),
                'No_Hp' => $this->input->post('no_hp'),
                'Tanggal_masuk' => $this->input->post('tanggal_masuk'),
                'Tanggal_ambil' => $this->input->post('tanggal_ambil'),
                'Status' => $this->input->post('tipe'),
                'Kuantitas' => $this->input->post('total_kuantitas'),
                'Total_Harga' => $this->input->post('total_harga'),
            );

 
	$where = array(
		'Id_satuan' => $this->input->post('id'),
	);
 
	$this->M_satuan->update_data($where,$data,'satuan');
	redirect('admin/tampilsatuandatang');	
	}
	
	
}