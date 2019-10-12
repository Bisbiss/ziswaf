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
}