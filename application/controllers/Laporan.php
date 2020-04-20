<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller{
    function __construct(){
        parent::__construct();		
		$this->load->helper('url');
        $this->load->library('session');
        $this->load->model('ModelLaporan');
        if ($this->session->userdata('status')!='admin') {
            redirect('welcome');
        }
    }

    function hapus($id_laporan){
        $this->ModelLaporan->hapus($id_laporan);
        redirect('Admin/laporan');
    }

    function tambah(){
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $jumlah = $_POST['jumlah'];
        $data_file = $_FILES['foto'];
        $config['upload_path'] = './assets/laporan';
        $config['allowed_types']='jpg|png|gif|jpeg';
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('foto')){
            die("Gagal Upload File");
        }else{
            $file=$this->upload->data('file_name');
        }
        $data = array(
            'judul' => $judul,
            'isi' => $isi,
            'jumlah' => $jumlah,
            'foto' => $data_file['name'],
            'waktu' => date('Y-m-d')
        );
        // var_dump($data_file);
        $proses = $this->ModelLaporan->tambah($data);
        if ($proses) {
            echo "<script language='javascript'>
                window.alert('Data Berhasil Ditambah');
                window.location.href='../admin/laporan';
                </script>";
        } else {
            echo "<script language='javascript'>
                window.alert('Data Gagal Ditambah');
                window.location.href='../admin/laporan';
                </script>";
        }
    }

    function ubah($id_laporan){
        $data = $this->ModelLaporan->get_where($id_laporan)->row();
        $this->load->view('template/head');
        $this->load->view('admin/menu');
        $this->load->view('admin/ubah_laporan', $data);
        $this->load->view('template/foot');
    }
    function proses_ubah(){
        $judul = $_POST['judul'];
        $id_laporan = $_POST['id_laporan'];
        $isi = $_POST['isi'];
        $data = array(
            'judul' => $judul,
            'isi' => $isi,
            'waktu' => date('Y-m-d')
        );

        $update = $this->ModelLaporan->ubah($data, $id_laporan);
        if ($update) {
            echo "<script language='javascript'>
                window.alert('Data Berhasil Diubah');
                </script>";
            redirect(base_url('admin/laporan'));
        } else {
            echo "<script language='javascript'>
                window.alert('Data Gagal Diubah');
                </script>";
            redirect(base_url('admin/laporan'));
        }
    }
}