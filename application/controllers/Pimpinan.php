<?php
defined ('BASEPATH') OR exit ('No direct script access allowed');

class Pimpinan extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
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
}