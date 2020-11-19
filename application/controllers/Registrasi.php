<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

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
		$this->load->library('form_validation');

	}


	public function index()
	{
		$data['kodeunik'] = $this->M_londri->buat_kode();

		$this->load->view('templates/header');
			$this->load->view('akun/registrasi',$data); 
	}


	public function daftar()
	{

		
			$this->form_validation->set_rules("id_pelanggan","id","required");
			$this->form_validation->set_rules("nama","Nama","required");
			$this->form_validation->set_rules("alamat","Alamat","required");
			$this->form_validation->set_rules('input_jeniskelamin', 'jenis_kelamin','required');
         	
			$this->form_validation->set_rules("nohp","No Telepon","required");
			$this->form_validation->set_rules("username","Username","required");
			$this->form_validation->set_rules("password","Password","required|min_length[6]|max_length[15]");


			
			$id = $this->input->post('id_pelanggan',true);
			$nama = $this->input->post('nama',true);
			$alamat = $this->input->post('alamat',true);
			$input_jeniskelamin = $this->input->post('input_jeniskelamin',true);
			
			$nohp = $this->input->post('nohp',true);
			$username = $this->input->post('username',true);

			$password = $this->input->post('password',true);
			$passhash = hash('md5', $password);

			$data = array(
				'id_pelanggan' => $id, 
				'nama_lengkap' => $nama,  
				'alamat' => $alamat,  
				'jenis_kelamin' => $input_jeniskelamin,  
				'no_telepon' => $nohp,
				'username' => $username,
				'password' => $passhash,  
				);

if ($this->form_validation->run()){
				$this->M_londri->registrasi($data,'pelanggan');
				$this->session->set_flashdata('success', 'Ditambahkan');
				redirect('login');
			}
			$data['kodeunik'] = $this->M_londri->buat_kode();
		$this->load->view('templates/header');
			$this->load->view('akun/registrasi',$data);
			
			
}
}