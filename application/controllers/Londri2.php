<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Londri extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();
		$this->load->model('M_londri');
		$this->load->library('cart');
		$this->load->library('session');

		$data['username'] = $this->session->userdata('username');



if($this->session->userdata('status') != "login"){
			$psn = "Login";
			echo "<script>
					alert('Anda belum login!');
					window.location.href='/londri';
				</script>";
		}
		




		

	}

	
	public function index()
	{
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/header2',$data);
		$this->load->view('beranda',$data);

	}

		function edit($Id_Informasi){
		$where = array('Id_Informasi' => $Id_Informasi);
		$data['informasi'] = $this->m_info->edit_data($where,'informasi')->result();
		$this->load->view('templates/admin/header_admin2');
		$this->load->view('admin/v_editInfo',$data);
		$this->load->view('templates/admin/footer_admin');
	}




	public function kiloan($username)
	{
		$data['username'] = $this->session->userdata('username');
		$where = array('username' => $username);
		$data['profil'] = $this->M_londri->edit_data($where,'pelanggan')->result();

		$this->load->view('templates/header2',$data);
		$this->load->view('kiloan',$data);
	}

	function tambah($id)
	{	
		$where = array('Id_barang' => $id);
		$data_produk= array('id' => $this->input->post('id'),
							 'name' => $this->input->post('nama'),
							 'price' => $this->input->post('harga'),
							 'qty' =>$this->input->post('qty')
							);

		
		$this->cart->insert($data_produk,$where);
		redirect('Londri/pilih');
	}

	public function check_out($username)
	{

		$data['username'] = $this->session->userdata('username');
		$where = array('username' => $username);
		$data['profil'] = $this->M_londri->edit_data($where,'pelanggan')->result();

		$this->load->view('templates/header2',$data);
		$this->load->view('checkout',$data);
		
	}


	



	public function pemesanan($username)
	{
		$data['username'] = $this->session->userdata('username');
		$where = array('username' => $username,
			);
		$data['pesan'] = $this->M_londri->pemesan($where,'kiloan')->result();
		
		$this->load->view('templates/header2',$data);
		$this->load->view('pesanan',$data);
	}

	

	public function inkilo()
	{

		$this->form_validation->set_rules("nama","Nama","required");
			$this->form_validation->set_rules("alamat","Alamat","required");
			$this->form_validation->set_rules("nohp","Nohp","required");
			$this->form_validation->set_rules("masuk","Masuk","required");
			$this->form_validation->set_rules("ambil","Ambil","required");

if ($this->form_validation->run()){
				$this->M_londri->ikilo();
				$this->session->set_flashdata('success', 'Ditambahkan');
				redirect('Londri');
			}
			$this->load->view('templates/header2');
			$this->load->view('kiloan');
			


	 
	}



	public function satuan($username)
	{
		$data['username'] = $this->session->userdata('username');
		$where = array('username' => $username,
			);
		$data['pesan'] = $this->M_londri->satuan($where,'satuan')->result();
		
		$this->load->view('templates/header2',$data);
		$this->load->view('pesanansatuan',$data);
	}


	public function pilih()
	{

		$data['username'] = $this->session->userdata('username');
		$data['barang'] = $this->M_londri->getAllBarang();

		$this->load->view('templates/header2',$data);
		$this->load->view('pilihbarang',$data);
	}

	



public function tampil_cucian()
	{
		$data['username'] = $this->session->userdata('username');
		$data['barang'] = $this->M_londri->getAllBarang();
		$this->load->view('templates/header2',$data);
		$this->load->view('tampil_cucian',$data);
	}

	




	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function ubah_cart()
	{
		$cart_info = $_POST['cart'] ;
		foreach( $cart_info as $id => $cart)
		{
			$rowid = $cart['rowid'];
			$price = $cart['price'];
			$amount = $price * $cart['qty'];
			$qty = $cart['qty'];
			if ($qty > 0){
			$data = array('rowid' => $rowid,
							'price' => $price,
							'amount' => $amount,
							'qty' => $qty);

			
			$this->cart->update($data);
		}else {
				$this->session->set_flashdata('Qty tidak valid');
			}
		}
		redirect('Londri/tampil_cucian');
	}


function hapus($rowid) 
	{
		if ($rowid=="all")
			{
				$this->cart->destroy();
			}
		else
			{
				$data = array('rowid' => $rowid,
			  				  'qty' =>0);
				$this->cart->update($data);
			}
		redirect('Londri/tampil_cucian');
	}




	public function insatu()
	{
		$this->form_validation->set_rules("username","Username","required");
			$this->form_validation->set_rules("nama","Nama","required");
			$this->form_validation->set_rules("alamat","Alamat","required");
			$this->form_validation->set_rules("telp","Telp","required");
			$this->form_validation->set_rules("kuantitas","Kuantitas","required");
			$this->form_validation->set_rules("harga","Harga","required");
			$this->form_validation->set_rules("masuk","Masuk","required");
			$this->form_validation->set_rules("ambil","Ambil","required");

if ($this->form_validation->run()){
				$this->M_londri->isatu();
				$this->session->set_flashdata('success', 'Ditambahkan');
				redirect('Londri');
			}
			$this->load->view('templates/header2');
			$this->load->view('kiloan');
			


	}



		function notakiloan($id)
	{
		$where = array('Id_Kiloan' => $id);
		$data['kiloan'] = $this->M_londri->notak($where,'kiloan')->result();
		$this->load->view('templates/header2');
		$this->load->view('v_notakiloan',$data);

	}

	function cetak($id){
		 ob_start();
		$where = array('Id_Kiloan' => $id);
		$data['pesan'] = $this->M_londri->notak($where,'kiloan')->result();
    $this->load->view('v_cetakF', $data);
    $html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
        require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('P','A4','en','Arial','',10);
    
    
    $pdf->WriteHTML($html);
    $pdf->Output('notakiloan.pdf', 'D/eva');
	}

	function cetaksatuan($id){
		 ob_start();
		$where = array('Id_satuan' => $id);
		$data['pesan'] = $this->M_londri->notas($where,'satuan')->result();
    $this->load->view('v_cetakFS', $data);
    $html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
        require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('P','A4','en','Arial','',10);
    
    $pdf->WriteHTML($html);
    $pdf->Output('notasatuan.pdf', 'D/eva');
	}


	
}
