<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->helper('url');
        $this->load->library('session');
        $this->load->model('ModelAkun');
        $this->load->model('ModelAgenda');
        $this->load->model('ModelLaporan');
        $this->load->model('ModelDonasi');
        if ($this->session->userdata('status')!='admin') {
            redirect('welcome');
        }       
    }
    
    public function index(){
        $this->load->view('template/head');
        $this->load->view('admin/menu');
        $this->load->view('admin/index');
        $this->load->view('template/foot');
    }

    public function akun(){
        $data['data'] = $this->ModelAkun->get()->result();

        $this->load->view('template/head');
        $this->load->view('admin/menu');
        $this->load->view('admin/akun',$data);
        $this->load->view('template/foot');
    }

    public function agenda(){
        $data['data'] = $this->ModelAgenda->get()->result();

        $this->load->view('template/head');
        $this->load->view('admin/menu');
        $this->load->view('admin/agenda',$data);
        $this->load->view('template/foot');
    }

    public function laporan(){
        $data['data'] = $this->ModelLaporan->get()->result();

        $this->load->view('template/head');
        $this->load->view('admin/menu');
        $this->load->view('admin/laporan',$data);
        $this->load->view('template/foot');
    }

    public function donasi(){
        $data['data'] = $this->ModelDonasi->get()->result();

        $this->load->view('template/head');
        $this->load->view('admin/menu');
        $this->load->view('admin/donasi',$data);
        $this->load->view('template/foot');
    }

    function tambah_donasi(){
        $username = $this->session->userdata('user');
		$data['data'] = $this->ModelAkun->get_where($username)->result();
        $this->load->view('template/head');
        $this->load->view('admin/menu');
        $this->load->view('admin/tambah_donasi', $data);
        $this->load->view('template/foot');
    }

    function hapus($id_user){
        $hapus = $this->ModelAkun->hapus($id_user);
        if ($hapus) {
            redirect('admin/akun');   
        } else {
        }
    }

    function ubah_akun(){
        $email = $_POST['email'];
		$username = $_POST['username'];
		$pass = $_POST['pass'];

		$data = array(
			'email' => $email,
			'username' =>$username,
            'pass' => md5($pass)
        );
        $ubah = $this->ModelAkun->ubah($data,$email);
        if ($ubah) {
            echo "<script language='javascript'>
                window.alert('Data Berhasil Diubah');
                window.location.href='../admin/Akun';
                </script>";
        } else {
            echo "<script language='javascript'>
                window.alert('Data Gagal Diubah');
                window.location.href='../admin/Akun';
                </script>";
        }
        
    }
}