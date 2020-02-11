<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Donasi extends CI_Controller{
    function __construct(){
        parent::__construct();		
		$this->load->helper('url');
        $this->load->library('session');
        $this->load->model('ModelDonasi');
        if ($this->session->userdata('status')!='admin') {
            redirect('welcome');
        }
    }

    function tambah_donasi(){
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
            'waktu' => date('Y-m-d'),
            'verifikasi' => 1
		);
		$tambah = $this->ModelDonasi->tambah($data);
		if (!$tambah) {
			echo "<script language='javascript'>
                window.alert('Data Gagal Ditambhakan');
                window.location.href='../admin/tambah_donasi';
                </script>";  
		} else {
			echo "<script language='javascript'>
                window.alert('Data Berhasil Ditambahkan');
                window.location.href='../admin/donasi';
                </script>";
		}
	}

    function hapus($id_donasi){
        $this->ModelDonasi->hapus($id_donasi);
        echo "<script language='javascript'>
                window.alert('Berhasil dihapus');
                window.location.href='../../admin/donasi';
                </script>";
    }

    function ubah($id_donasi){
        $data = $this->ModelDonasi->ambil_data($id_donasi)->row();
        $this->load->view('template/head');
        $this->load->view('admin/menu');
        $this->load->view('admin/ubah', $data);
        $this->load->view('template/foot');
        // var_dump($data);
    }

    function proses_ubah(){
        $id_donasi = $_POST['id_donasi'];
        $nama = $_POST['nama_donatur'];
		$email = $_POST['email'];
		$zakat_mal = $_POST['zakat'];
		$zakat_profesi = $_POST['zakat_profesi'];
		$infak = $_POST['infak'];
		$sedekah = $_POST['sedekah'];
		$wakaf = $_POST['wakaf'];
		$lainya = $_POST['lainya'];
		$data = array(
            'nama' => $nama,
			'email' => $email,
			'zakat_mal' => $zakat_mal,
			'zakat_profesi' => $zakat_profesi,
			'infak' => $infak,
			'wakaf' => $wakaf,
			'sedekah' => $sedekah,
			'lainya' => $lainya
        );
        $ubah = $this->ModelDonasi->ubah($data, $id_donasi);
        if($ubah){
            echo "<script language='javascript'>
            window.alert('Data Berhasil Diubah');
            window.location.href='../admin/donasi';
            </script>";
        }else{
            echo "<script language='javascript'>
            window.alert('Data Gagal Diubah');
            window.location.href='../admin/donasi';
            </script>";
        }
    }

    function verifikasi($id_donasi){
        $this->ModelDonasi->verifikasi($id_donasi);
            echo "<script language='javascript'>
                window.alert('Verifikasi Berhasil');
                window.location.href='../../admin/donasi';
                </script>";        
    }

    
}