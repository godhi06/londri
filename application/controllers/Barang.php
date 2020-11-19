<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {
	
	private $_table = "barang";
	
	public function __construct()
	{
		parent::__construct();
			$this->load->library('session'); 
			$this->load->model('M_barang');
	}



	
	 
	function input(){
            $nama = $this->input->post('namabarang');
            $harga = $this->input->post('harga');

            $data = array(
				'Id_barang' => "",
				'Nama_barang' => $nama,
				'Harga_barang' => $harga,
				);

			
			$this->M_barang->insert2($data,'pelanggan');
			redirect('admin/barang');
			echo "Sukses";
		}
	
	
	function hapus($id_barang){
		$this->M_barang->hapus($id_barang);
		redirect('admin/barang');
	}
	
	function edit($id_barang)
	{
		$where = array('Id_barang' => $id_barang);
		$data['barang'] = $this->M_barang->edit_data($where,'barang')->result();
		$this->load->view('templates/header_admin2');
		$this->load->view('admin/editbarang',$data);
		
	}

	
	function update()
	{
		 //encrypt file name
	
		$data = array(
                'Id_barang' => $this->input->post('id'),
                'Nama_barang' => $this->input->post('namabarang'),
                'Harga_barang' => $this->input->post('harga'),
                
            );
 
	$where = array(
		'Id_barang' => $this->input->post('id'),
	);
 
	$this->M_barang->update_data($where,$data,'barang');
	redirect('admin/barang');	
	}
	
	
}