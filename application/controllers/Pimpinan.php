<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Pimpinan extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('ModelDonasi');
        $this->load->model('ModelLaporan');
        $this->load->library('session');
        if ($this->session->userdata('status')!='pimpinan') {
            redirect('welcome');
        }
    }

    function index(){
        $this->load->view('template/head');
        $this->load->view('pimpinan/menu');
        $this->load->view('pimpinan/index');
        $this->load->view('template/foot');
    }

    function lihatDonasi(){
        $data['data'] = $this->ModelDonasi->get()->result();
        $this->load->view('template/head');
        $this->load->view('pimpinan/menu');
        $this->load->view('pimpinan/lihatDonasi',$data);
        $this->load->view('template/foot');
    }

    function lihatLaporan(){
        $data['data'] = $this->ModelLaporan->get()->result();
        $this->load->view('template/head');
        $this->load->view('pimpinan/menu');
        $this->load->view('pimpinan/lihatLaporan',$data);
        $this->load->view('template/foot');
    }

    function laporan_pdf(){

        $data['data'] = $this->ModelDonasi->get()->result();

        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan.pdf";
        $this->pdf->load_view('pimpinan/laporan', $data);
    }
}