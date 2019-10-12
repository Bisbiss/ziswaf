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

    function hapus($id_berita){
        $this->ModelAgenda->hapus($id_berita);
        redirect('Admin/agenda');
    }
}