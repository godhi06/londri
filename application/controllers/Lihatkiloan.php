<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lihatkiloan extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
			$this->load->library('session'); 
			$this->load->model('M_kiloan');
	}



	
	 
	
	
	
	function hapus($id_kiloan){
		$this->M_kiloan->hapus($id_kiloan);
		redirect('admin/tampilkiloan');
	}

	function hapusdatang($id_kiloan){
		$this->M_kiloan->hapus($id_kiloan);
		redirect('admin/tampilkiloandatang');
	}
	
	function edit($id_kiloan)
	{
		$where = array('Id_Kiloan' => $id_kiloan);
		$data['kiloan'] = $this->M_kiloan->edit_data($where,'kiloan')->result();
		$this->load->view('templates/header_admin2');
		$this->load->view('admin/editkiloan',$data);
		
	}

	function editdatang($id_kiloan)
	{
		$where = array('Id_Kiloan' => $id_kiloan);
		$data['kiloan'] = $this->M_kiloan->edit_data($where,'kiloan')->result();
		$this->load->view('templates/header_admin2');
		$this->load->view('admin/editkiloandatang',$data);
		
	}

	
	function update()
	{
		 //encrypt file name


		$post = $this->input->post();
		$berat = $post["total_berat_cucian"];
		
		$sekilo = 7000;
		$totalharga = $sekilo * $berat;
		
	
		$data = array(
                'Id_Kiloan' => $this->input->post('id'),
                'username' => $this->input->post('username'),
                'Alamat' => $this->input->post('alamat'),
                'No_Hp' => $this->input->post('no_hp'),
                'Tanggal_masuk' => $this->input->post('tanggal_masuk'),
                'Tanggal_ambil' => $this->input->post('tanggal_ambil'),
                'Status' => $this->input->post('tipe'),
                'Total_berat_cucian' => $berat,
                'Harga' => $totalharga,
            );

 
	$where = array(
		'Id_Kiloan' => $this->input->post('id'),
	);
 
	$this->M_kiloan->update_data($where,$data,'kiloan');
	redirect('admin/tampilkiloan');	
	}


	function updatedatang()
	{
		 //encrypt file name


		$post = $this->input->post();
		$berat = $post["total_berat_cucian"];
		
		$sekilo = 7000;
		$totalharga = $sekilo * $berat;
		
	
		$data = array(
                'Id_Kiloan' => $this->input->post('id'),
                
                'Alamat' => $this->input->post('alamat'),
                'No_Hp' => $this->input->post('no_hp'),
                'Tanggal_masuk' => $this->input->post('tanggal_masuk'),
                'Tanggal_ambil' => $this->input->post('tanggal_ambil'),
                'Status' => $this->input->post('tipe'),
                'Total_berat_cucian' => $berat,
                'Harga' => $totalharga,
            );

 
	$where = array(
		'Id_Kiloan' => $this->input->post('id'),
	);
 
	$this->M_kiloan->update_data($where,$data,'kiloan');
	redirect('admin/tampilkiloandatang');	
	}
	
	
	


	
}