<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('ModelAgenda');
        if ($this->session->userdata('status')!='user') {
            redirect('welcome');
        }
	}
	
	function index(){
		$agenda['agenda'] = $this->ModelAgenda->get()->result();
		$this->load->view('template/head');
		$this->load->view('home/menu');
		$this->load->view('home/index', $agenda);
		$this->load->view('template/foot');
	}
	function keluar(){

	}
}