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


if($this->session->userdata('status') != "login"){
			$psn = "Login";
			echo "<script>
					alert('Anda belum login!');
					window.location.href='/londri/londri_admin';
				</script>";
		}
		




		

	}

	
	public function index($Username)
	{

		$data['Username'] = $this->session->userdata('Username');
		$where = array('Username' => $Username,
			);
		$data['pesan'] = $this->M_admin->profadmin($where,'satuan')->result();
		$this->load->view('templates/header2');
		$this->load->view('beranda');

	}





	public function kiloan()
	{

		$this->load->view('templates/header2');
		$this->load->view('kiloan');
	}


	



	public function pemesanan()
	{
		$data['kiloan'] = $this->M_londri->getAllKiloan();
		$this->load->view('templates/header2');
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



	public function satuan()
	{
		$data['barang'] = $this->M_londri->getAllBarang();
		$this->load->view('templates/header2');
		$this->load->view('satuan',$data);
	}


	public function pilih()
	{
		$data['barang'] = $this->M_londri->getAllBarang();

		$this->load->view('templates/header2');
		$this->load->view('pilihbarang',$data);
	}

	



public function tampil_cucian()
	{
		$data['barang'] = $this->M_londri->getAllBarang();
		$this->load->view('templates/header2');
		$this->load->view('tampil_cucian',$data);
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
	$nama = $this->input->post('nama');
  $alamat = $this->input->post('alamat');
  $nosambungan = $this->input->post('nohp');
  $masuk = date('Y-m-d', strtotime($this->input->post['masuk']));
  $keluar = date('Y-m-d', strtotime($this->input->post['keluar']));
  
  


$old_date = $this->input->post['masuk'];
$o_date_time = strtotime($o_date);
$date = date('Y-m-d', $o_date_time);


$old_date = $this->input->post['keluar'];
$o_date_time = strtotime($o_date);
$date = date('Y-m-d', $o_date_time);




  $data = array(
   'Id_Kiloan' => "",
   'Nama' => $nama,
   'Alamat' => $alamat,
   'No_Hp' => $nosambungan,
   'Tanggal_masuk' => $masuk,
   'Tanggal_ambil' => $keluar,
   'Status' => "Belum",
   'Harga' => "-",
   );

  $this->M_londri->scs($data, $kiloan);
  $this->M_londri->barang();
  $this->session->set_flashdata('message', 'Sukses Tambah Data');
  redirect('Londri');
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
    $data['kiloan'] = $this->M_londri->notak($where,'kiloan')->result();
    $this->load->view('v_cetakF', $data);
    $html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
        require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('P','A4','en','Arial','',10);
    
    $pdf->WriteHTML($html);
    $pdf->Output('notakiloan.pdf', 'D/eva');
	}


	
}
