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

    function hapus($id_donasi){
        $this->ModelDonasi->hapus($id_donasi);
        redirect('Admin/donasi');
    }
}