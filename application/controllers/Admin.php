<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Admin extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('M_barang');
		$this->load->model('M_admin');
		$this->load->model('M_pelanggan');
		$this->load->model('M_kiloan');
		$this->load->model('M_satuan');
		$this->load->model('M_londri');


		$data['Username'] = $this->session->userdata('Username');


		
		if($this->session->userdata('status') != "login"){
			$psn = "Login";
			echo "<script>
					alert('Anda belum login!');
					window.location.href='/londri/login_admin';
				</script>";
		}
	}


	

	public function index()
	{
	$data['Username'] = $this->session->userdata('Username');
	$Username = $this->session->userdata('Username');
		$where = array('Username' => $Username,
			);
		$data['pesan'] = $this->M_admin->getAdmin($where,'admin')->result();
		$this->load->view('templates/header_admin2');
		$this->load->view('admin/v_profil',$data);
	}
	
	
	public function login()
	{
		$this->load->view('templates/admin/header_admin');
		$this->load->view('admin/v_login');
	}


	public function searchbarang(){



    // Ambil data NIS yang dikirim via ajax post
    $keyword = $this->input->post('keyword');
    $barang = $this->M_barang->cariDatabarang($keyword);
    
    // Kita load file view.php sambil mengirim data siswa hasil query function search di SiswaModel
    $hasil = $this->load->view('admin/barang', array('barang'=>$barang), true);
    
    // Buat sebuah array
    $callback = array(
      'hasil' => $hasil, // Set array hasil dengan isi dari view.php yang diload tadi
    );
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }

	public function barang()
	{
		$data['barang'] = $this->M_barang->tampil_data();
		$this->load->view('templates/header_admin2');
		$this->load->view('admin/ibarang',$data);
	}


	public function searchpelanggan(){



    // Ambil data NIS yang dikirim via ajax post
    $keyword = $this->input->post('keyword');
    $pelanggan = $this->M_pelanggan->cariDatapelanggan($keyword);
    
    // Kita load file view.php sambil mengirim data siswa hasil query function search di SiswaModel
    $hasil = $this->load->view('admin/pelanggan', array('pelanggan'=>$pelanggan), true);
    
    // Buat sebuah array
    $callback = array(
      'hasil' => $hasil, // Set array hasil dengan isi dari view.php yang diload tadi
    );
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }


	public function pelanggan()
	{
		$data['pelanggan'] = $this->M_pelanggan->tampil_data();
		$this->load->view('templates/header_admin2');
		$this->load->view('admin/ipelanggan',$data);
	}

	public function searchkiloan(){

    // Ambil data NIS yang dikirim via ajax post
    $keyword = $this->input->post('keyword');
    $kiloan = $this->M_kiloan->cariDatakiloan($keyword);
    
    // Kita load file view.php sambil mengirim data siswa hasil query function search di SiswaModel
    $hasil = $this->load->view('admin/lihatkiloan', array('kiloan'=>$kiloan), true);
    
    // Buat sebuah array
    $callback = array(
      'hasil' => $hasil, // Set array hasil dengan isi dari view.php yang diload tadi
    );
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }

	public function searchkiloandatang(){

    // Ambil data NIS yang dikirim via ajax post
    $keyword = $this->input->post('keyword');
    $kiloan = $this->M_kiloan->cariDatakiloandatang($keyword);
    
    // Kita load file view.php sambil mengirim data siswa hasil query function search di SiswaModel
    $hasil = $this->load->view('admin/lihatkiloandatang', array('kiloan'=>$kiloan), true);
    
    // Buat sebuah array
    $callback = array(
      'hasil' => $hasil, // Set array hasil dengan isi dari view.php yang diload tadi
    );
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }


	public function tampilkiloan()
	{
		$data['kiloan'] = $this->M_kiloan->tampil_kiloan();
		$this->load->view('templates/header_admin2');
		$this->load->view('admin/ilihatkiloan',$data);
	}

	public function tampilkiloandatang()
	{
		$data['kiloan'] = $this->M_kiloan->tampil_kiloan_datang();
		$this->load->view('templates/header_admin2');
		$this->load->view('admin/ilihatkiloandatang',$data);
	}
	
	public function searchsatuandatang(){

    // Ambil data NIS yang dikirim via ajax post
    $keyword = $this->input->post('keyword');
    $satuan = $this->M_satuan->cariDatasatuandatang($keyword);
    
    // Kita load file view.php sambil mengirim data siswa hasil query function search di SiswaModel
    $hasil = $this->load->view('admin/lihatsatuandatang', array('satuan'=>$satuan), true);
    
    // Buat sebuah array
    $callback = array(
      'hasil' => $hasil, // Set array hasil dengan isi dari view.php yang diload tadi
    );
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }
	public function tampilsatuandatang()
	{
		$data['satuan'] = $this->M_satuan->tampil_satuan_datang();
		$this->load->view('templates/header_admin2');
		$this->load->view('admin/ilihatsatuandatang',$data);
	}


public function searchsatuan(){

    // Ambil data NIS yang dikirim via ajax post
    $keyword = $this->input->post('keyword');
    $satuan = $this->M_satuan->cariDatasatuan($keyword);
    
    // Kita load file view.php sambil mengirim data siswa hasil query function search di SiswaModel
    $hasil = $this->load->view('admin/lihatsatuan', array('satuan'=>$satuan), true);
    
    // Buat sebuah array
    $callback = array(
      'hasil' => $hasil, // Set array hasil dengan isi dari view.php yang diload tadi
    );
    echo json_encode($callback); // konversi varibael $callback menjadi JSON
  }

	public function tampilsatuan()
	{
		$data['satuan'] = $this->M_satuan->tampil_satuan();
		$this->load->view('templates/header_admin2');
		$this->load->view('admin/ilihatsatuan',$data);
	}

	public function cucian()
	{
		
		$data['kodeunik'] = $this->M_londri->kode_kiloan();
		$this->load->view('templates/header_admin2');
		$this->load->view('admin/cucikiloan',$data);
	}

	public function inkilo()
	{

		$this->form_validation->set_rules("kode_kiloan","Kode_kiloan","required");
		$this->form_validation->set_rules("nama","Nama","required");
		
			$this->form_validation->set_rules("alamat","Alamat","required");
			$this->form_validation->set_rules("nohp","Nohp","required");
			$this->form_validation->set_rules("berat","Berat","required");
			$this->form_validation->set_rules("masuk","Masuk","required");
			$this->form_validation->set_rules("ambil","Ambil","required");

if ($this->form_validation->run()){
				$this->M_kiloan->ikilo ();
				$this->session->set_flashdata('success', 'Ditambahkan');
				redirect('Admin');
			}
$data['kodeunik'] = $this->M_londri->kode_kiloan();
			
			$this->load->view('templates/header_admin2');
			$this->load->view('admin/cucikiloan',$data);
			
	}


	public function insatu()
	{
		
		$this->form_validation->set_rules("kode_satuan","kode_Satuan","required");
		
			$this->form_validation->set_rules("nama","Nama","required");
			$this->form_validation->set_rules("alamat","Alamat","required");
			$this->form_validation->set_rules("telp","Telp","required");
			$this->form_validation->set_rules("kuantitas","Kuantitas","required");
			$this->form_validation->set_rules("harga","Harga","required");
			$this->form_validation->set_rules("masuk","Masuk","required");
			$this->form_validation->set_rules("ambil","Ambil","required");

if ($this->form_validation->run()){
				$this->M_satuan->isatu();
				$this->session->set_flashdata('success', 'Ditambahkan');
				redirect('admin');
			}
			$data['kodeunik'] = $this->M_londri->kode_satuan();
			
			$this->load->view('templates/header_admin2');
			$this->load->view('admin/checkout',$data);


	}




		public function cuciansatuan()
	{
		$data['barang'] = $this->M_londri->getAllBarang();

		$this->load->view('templates/header_admin2');
		$this->load->view('admin/pilihcucian',$data);
	}

	function tambah()
	{


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
		redirect('admin/cuciansatuan');
}
	}


	function hapus($rowid) 
	{

		if ($rowid=="all")
			{
				$this->cart->destroy();
			}
		else{
				$data = array('rowid' => $rowid,
			  				  'qty' =>0);
				$this->cart->update($data);
			}
		redirect('admin/tampil_cucian');
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
		redirect('admin/tampil_cucian');
	}

public function check_out()
	{


		$data['kodeunik'] = $this->M_londri->kode_satuan();

		

		$this->load->view('templates/header_admin2');
		$this->load->view('admin/checkout',$data);
		
	}




public function tampil_cucian()
	{


		
		$data['barang'] = $this->M_londri->getAllBarang();
		$this->load->view('templates/header_admin2');
		$this->load->view('admin/tampil_cucian',$data);
		
	}


	
}