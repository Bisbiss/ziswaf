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
            echo "gagal";
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
        // var_dump($proses);
        redirect(base_url('admin/agenda'));
    }
}