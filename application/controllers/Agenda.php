<?php
defined ('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller{
    function __construct(){
        parent::__construct();		
		$this->load->helper('url');
        $this->load->library('session');
        $this->load->model('ModelAgenda');
        if ($this->session->userdata('status')!='admin') {
            redirect('welcome');
        }
    }

    function hapus($id_agenda){
        $this->ModelAgenda->hapus($id_agenda);
        echo "<script language='javascript'>
                window.alert('Data Berhasil Dihapus');
                window.location.href='../../admin/Agenda';
                </script>";
    }

    function tambah(){
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $data_file = $_FILES['file'];
        $config['upload_path'] = './assets/agenda';
        $config['allowed_types']='jpg|png|gif|jpeg';
        $this->load->library('upload',$config);
        if(!$this->upload->do_upload('file')){
            die("Gagal Upload File");
        }else{
            $file=$this->upload->data('file_name');
        }
        $data = array(
            'judul' => $judul,
            'isi' => $isi,
            'foto' => $data_file['name'],
            'waktu' => date('Y-m-d')
        );

        $proses = $this->ModelAgenda->tambah($data);
        if ($proses) {
            echo "<script language='javascript'>
                window.alert('Data Berhasil Ditambah');
                window.location.href='../admin/Agenda';
                </script>";
        } else {
            echo "<script language='javascript'>
                window.alert('Data Gagal Ditambah');
                window.location.href='../admin/Agenda';
                </script>";
        }
    }

    function ubah($id_agenda){
        $data = $this->ModelAgenda->get_where($id_agenda)->row();
        $this->load->view('template/head');
        $this->load->view('admin/menu');
        $this->load->view('admin/ubah_agenda', $data);
        $this->load->view('template/foot');
    }
    function proses_ubah(){
        $judul = $_POST['judul'];
        $id_agenda = $_POST['id_agenda'];
        $isi = $_POST['isi'];
        $data = array(
            'judul' => $judul,
            'isi' => $isi,
            'waktu' => date('Y-m-d')
        );

        $update = $this->ModelAgenda->ubah($data, $id_agenda);
        if ($update) {
            echo "<script language='javascript'>
                window.alert('Data Berhasil Diubah');
                </script>";
            redirect(base_url('admin/agenda'));
        } else {
            echo "<script language='javascript'>
                window.alert('Data Gagal Diubah');
                </script>";
            redirect(base_url('admin/agenda'));
        }
    }
}