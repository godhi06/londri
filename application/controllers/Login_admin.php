<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('M_admin');
	}
	
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('admin/v_login');
	}
	
	public function validasi()
	{
		$eml = $this->input->post('username');
		$pass = $this->input->post('password');
		$where = array(
			'Username' => $eml,
			'Password' => md5($pass)
			);
		$cek = $this->M_admin->ceklogin("admin",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'Username' => $eml,
				'status' => "login"
				);
				
			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('success', 'Success Message...');  
			redirect(base_url('Admin'));
		} else {
			$this->session->set_flashdata('sukses', 'Gagal Login!'); 
			redirect(base_url('Login_admin'));
		}
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('Login_admin'));
	}
}

?>
