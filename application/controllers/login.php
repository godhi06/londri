<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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

	}



			public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('akun/login');
	}
	
	public function validasi()
	{
		$use = $this->input->post('username');
		$pass = $this->input->post('password');
		$where = array(
			'username' => $use,
			'password' => md5($pass)
			);
		$cek = $this->M_londri->ceklogin("pelanggan",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'username' => $use,
				'status' => "login"
				);
			
           $this->session->set_userdata($data_session);
			$this->session->set_flashdata('success', 'Success Message...');  
			
			redirect(base_url('londri'));
		} else {
			$this->session->set_flashdata('sukses', 'Gagal Login!'); 
			redirect(base_url('login'));
		}
	}
	
public function logout()
	{
		$this->session->unset_userdata('akun_login');
		$this->session->sess_destroy();
		redirect("Londri");
	}


		}





	

