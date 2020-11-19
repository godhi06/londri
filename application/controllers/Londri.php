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




		

	}

	
	public function index()
	{
		
if($this->session->userdata('status') != "login"){
			$psn = "Login";
			echo "<script>
					alert('Anda belum login!');
					window.location.href='/londri';
				</script>";
		}
		



        
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/header2',$data);
		$this->load->view('beranda',$data);
		$this->load->view('templates/footer');
	}

	public function pembayaran()
	{
		
if($this->session->userdata('status') != "login"){
			$psn = "Login";
			echo "<script>
					alert('Anda belum login!');
					window.location.href='/londri';
				</script>";
		}
		



        
		$data['username'] = $this->session->userdata('username');
		$this->load->view('templates/header2',$data);
		$this->load->view('pembayaran',$data);
		$this->load->view('templates/footer');
	}



	public function hasil()
	{

		
		$kln = "LK";  //definisi resi LK
$stn = "LS";  //definisi kode LS
 $search = $this->input->get('keyword'); //definisi search disi inpujt get
 $kode = substr($search,0,2); //memotong string dari 0 ke 2
if($kode == $kln)  {
$data2['order'] = $this->M_londri->cariDataOrder(); //model search untuk kiloan
$this->load->view('hasil_cari', $data2);
}
elseif ($kode == $stn){ 
$data2['order'] = $this->M_londri->cari();  //model search untuk satuan
$this->load->view('hasil_cariS', $data2);
}
else{
echo $kode;
}
			
	}








	public function kiloan($username)
	{

if($this->session->userdata('status') != "login"){
			$psn = "Login";
			echo "<script>
					alert('Anda belum login!');
					window.location.href='/londri';
				</script>";
		}
		$data['kodeunik'] = $this->M_londri->kode_kiloan();
		$data['username'] = $this->session->userdata('username');
		$where = array('username' => $username);
		$data['profil'] = $this->M_londri->edit_data($where,'pelanggan')->result();
		$this->load->view('templates/header2',$data);
		$this->load->view('kiloan',$data);
		$this->load->view('templates/footer');
	}

	public function check_out($username)
	{

if($this->session->userdata('status') != "login"){
			$psn = "Login";
			echo "<script>
					alert('Anda belum login!');
					window.location.href='/londri';
				</script>";
		}
		$data['kodeunik'] = $this->M_londri->kode_satuan();

		$data['username'] = $this->session->userdata('username');
		$where = array('username' => $username);
		$data['profil'] = $this->M_londri->edit_data($where,'pelanggan')->result();

		$this->load->view('templates/header2',$data);
		$this->load->view('checkout',$data);
		$this->load->view('templates/footer');
	}


	public function pemesanan($username)
	{

if($this->session->userdata('status') != "login"){
			$psn = "Login";
			echo "<script>
					alert('Anda belum login!');
					window.location.href='/londri';
				</script>";
		}
		$data['username'] = $this->session->userdata('username');
		$where = array('username' => $username,
			);
		$data['pesan'] = $this->M_londri->pemesan($where,'kiloan')->result();
		
		$this->load->view('templates/header2',$data);
		$this->load->view('pesanan',$data);
		
	}

	

	public function inkilo($username)
	{

if($this->session->userdata('status') != "login"){
			$psn = "Login";
			echo "<script>
					alert('Anda belum login!');
					window.location.href='/londri';
				</script>";
		}
		$data['username'] = $this->session->userdata('username');
		$where = array('username' => $username);
		$data['profil'] = $this->M_londri->edit_data($where,'pelanggan')->result();
		$this->form_validation->set_rules("kode_kiloan","Kode_kiloan");
		$this->form_validation->set_rules("username");
		$this->form_validation->set_rules("nama","Nama");
			$this->form_validation->set_rules("alamat","Alamat");
			$this->form_validation->set_rules("nohp","Nohp");
			$this->form_validation->set_rules("berat","Berat","required");
			$this->form_validation->set_rules("masuk","Masuk","required");
			$this->form_validation->set_rules("ambil","Ambil","required");

if ($this->form_validation->run()){
				$this->M_londri->ikilo();
				$this->session->set_flashdata('success', 'Ditambahkan');
				redirect('Londri');
			}
$data['kodeunik'] = $this->M_londri->kode_kiloan();
			$this->load->view('templates/header2',$data);
			
			$this->load->view('kiloan',$data);
			$this->load->view('templates/footer');
	}



	public function satuan($username)
	{

if($this->session->userdata('status') != "login"){
			$psn = "Login";
			echo "<script>
					alert('Anda belum login!');
					window.location.href='/londri';
				</script>";
		}
		$data['username'] = $this->session->userdata('username');
		$where = array('username' => $username,
			);
		$data['pesan'] = $this->M_londri->satuan($where,'satuan')->result();
		
		$this->load->view('templates/header2',$data);
		$this->load->view('pesanansatuan',$data);
		
	}


	public function pilih()
	{


if($this->session->userdata('status') != "login"){
			$psn = "Login";
			echo "<script>
					alert('Anda belum login!');
					window.location.href='/londri';
				</script>";
		}
		$data['username'] = $this->session->userdata('username');
		$data['barang'] = $this->M_londri->getAllBarang();

		$this->load->view('templates/header2',$data);
		$this->load->view('pilihbarang',$data);
		$this->load->view('templates/footer');
	}

	



public function tampil_cucian()
	{

if($this->session->userdata('status') != "login"){
			$psn = "Login";
			echo "<script>
					alert('Anda belum login!');
					window.location.href='/londri';
				</script>";
		}
		$data['username'] = $this->session->userdata('username');
		$data['barang'] = $this->M_londri->getAllBarang();
		$this->load->view('templates/header2',$data);
		$this->load->view('tampil_cucian',$data);
		$this->load->view('templates/footer');
	}


function tambah()
	{

if($this->session->userdata('status') != "login"){
			$psn = "Login";
			echo "<script>
					alert('Anda belum login!');
					window.location.href='/londri';
				</script>";
		}

if ($_POST) {
	# code...
	$id = $this->input->post('id');
							 $name = $this->input->post('nama');
							 $price = $this->input->post('harga');
							 $gambar = $this->input->post('gambar');
							 $qty =$this->input->post('qty');

							 $data = array();
							 for($i = 0; $i< count ( $this->input->post('id')); $i++){
							 	$data[$i]=array(
							 					'id' => $id[$i],
							 'name' => $name[$i],
							 'price' => $price[$i],
							 'gambar' => $gambar[$i],
							 'qty' =>$qty[$i]
							 		);
							 }
							 $this->cart->insert($data);
		redirect('londri/pilih');
}
	}

	




	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function ubah_cart()
	{

if($this->session->userdata('status') != "login"){
			$psn = "Login";
			echo "<script>
					alert('Anda belum login!');
					window.location.href='/londri';
				</script>";
		}
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

if($this->session->userdata('status') != "login"){
			$psn = "Login";
			echo "<script>
					alert('Anda belum login!');
					window.location.href='/londri';
				</script>";
		}
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




	public function insatu($username)
	{
		if($this->session->userdata('status') != "login"){
			$psn = "Login";
			echo "<script>
					alert('Anda belum login!');
					window.location.href='/londri';
				</script>";
		}

		$data['username'] = $this->session->userdata('username');
		$where = array('username' => $username);
		$data['profil'] = $this->M_londri->edit_data($where,'pelanggan')->result();
		$this->form_validation->set_rules("kode_satuan","kode_Satuan","required");
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
			$data['kodeunik'] = $this->M_londri->kode_satuan();
			$this->load->view('templates/header2',$data);
			$this->load->view('checkout',$data);
			$this->load->view('templates/footer');


	}



		function notakiloan($id)
	{
		if($this->session->userdata('satus') != "login"){
			$psn = "Login";
			echo "<script>
					alert('Anda belum login!');
					window.location.href='/londri';
				</script>";
		}
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


	
