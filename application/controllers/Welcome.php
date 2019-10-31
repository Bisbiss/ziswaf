<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
		$this->load->model('ModelAkun');
		$this->load->library('session');
 
	}


	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('login');
	}

	public function daftar()
	{
		$this->load->view('template/head');
		$this->load->view('daftar');
	}
	public function daftarAkun()
	{
		$email = $_POST['email'];
		$username = $_POST['username'];
		$pass = $_POST['pass'];

		$data = array(
			'email' => $email,
			'username' =>$username,
			'pass' => md5($pass));

		$cek = $this->ModelAkun->cek($username,$email)->num_rows();
		if($cek > 0){
			redirect('welcome/daftar?pesan=gagal');
		}else{
		// $daftar = $this->ModelAkun->daftarAkun($data);
			// redirect('welcome/index?pesan=dibuat');			
		}
	}

	function prosesLogin(){
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		
		$where = array(
			'email' => $email,
			'pass' => md5($pass)
		);

		$query = $this->ModelAkun->login($where);
		$cek = $query->num_rows();

		if ($cek<1) {
			redirect('welcome/index?pesan=false');
		}else{
			$cek_level = $query->row();
			if ($cek_level->level == 3) {
				$ses = array(
					'user' => $cek_level->username,
					'status' => 'admin'
				);
				$this->session->set_userdata($ses);
				redirect('admin');
			} else if ($cek_level->level == 2){
				$ses = array(
					'user' => $cek_level->username,
					'status' => 'pimpinan'
				);
				$this->session->set_userdata($ses);
				redirect('pimpinan');
			}else{
				$ses = array(
					'user' => $cek_level->username,
					'status' => 'user'
				);
				$this->session->set_userdata($ses);
				redirect('home');
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('welcome');
	}
}
