<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('ModelAgenda');
		$this->load->model('ModelLaporan');
		$this->load->model('ModelAkun');
		$this->load->model('ModelDonasi');
        if ($this->session->userdata('status')!='user') {
            redirect('welcome');
        }
	}
	
	function index(){
		$item['item'] = $this->ModelAgenda->get()->result();
		$this->load->view('template/head');
		$this->load->view('home/menu');
		$this->load->view('home/index', $item);
		// $this->load->view('template/foot');
	}

	function profil(){
		$data['data'] = $this->ModelAkun->get_where($this->session->userdata('user'))->result();
		$this->load->view('template/head');
		$this->load->view('home/menu');
		$this->load->view('home/profile', $data);
		// $this->load->view('template/foot');
	}

	function laporan(){
		$laporan['laporan'] = $this->ModelLaporan->get()->result();
		$this->load->view('template/head');
		$this->load->view('home/menu');
		$this->load->view('home/laporan', $laporan);
		// $this->load->view('template/foot');
	}

	function agenda($id){
		$item['item'] = $this->ModelAgenda->get_where($id)->result();
		$this->load->view('template/head');
		$this->load->view('home/menu');
		$this->load->view('home/agenda', $item);
		// $this->load->view('template/foot');
	}

	function donasi(){
		$username = $this->session->userdata('user');
		$data['data'] = $this->ModelAkun->get_where($username)->result();
		$this->load->view('template/head');
		$this->load->view('home/menu');
		$this->load->view('home/donasi', $data);
		// $this->load->view('template/foot');
		// echo $username;
	}
	function submit_donasi(){
		$name = $_POST['nama_donatur'];
		$email = $_POST['email'];
		$zakat_mal = $_POST['zakat'];
		$zakat_profesi = $_POST['zakat_profesi'];
		$infak = $_POST['infak'];
		$sedekah = $_POST['sedekah'];
		$wakaf = $_POST['wakaf'];
		$lainya = $_POST['lainya'];
		$data = array(
			'nama' => $name,
			'email' => $email,
			'zakat_mal' => $zakat_mal,
			'zakat_profesi' => $zakat_profesi,
			'infak' => $infak,
			'wakaf' => $wakaf,
			'sedekah' => $sedekah,
			'lainya' => $lainya,
			'waktu' => date('Y-m-d')
		);
		$tambah = $this->ModelDonasi->tambah($data);
		if (!$tambah) {
			echo "Data Gagal Ditambahkan";
		} else {
			redirect(base_url('home/donasi_done/'));
		}
	}
	function donasi_done(){
		$nama = $this->session->userdata('user');
		$akun =$this->db->query("select * from user Where username = '$nama'")->row();
		// var_dump($akun);
		// echo $akun->email;
		$data['data'] = $this->ModelDonasi->get_where($akun->email)->row();
		$this->load->view('template/head');
		$this->load->view('home/menu');
		$this->load->view('home/donasi_done',$data);
		// $this->load->view('template/foot');
	}
	function bantuan(){
		$this->load->view('template/head');
		$this->load->view('home/menu');
		$this->load->view('home/bantuan');
		// $this->load->view('template/foot');
	}
}