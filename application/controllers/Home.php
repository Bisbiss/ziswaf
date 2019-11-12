<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('ModelAgenda');
		$this->load->model('ModelLaporan');
        if ($this->session->userdata('status')!='user') {
            redirect('welcome');
        }
	}
	
	function index(){
		$item['item'] = $this->ModelAgenda->get()->result();
		$this->load->view('template/head');
		$this->load->view('home/menu');
		$this->load->view('home/index', $item);
		$this->load->view('template/foot');
	}
	function laporan(){
		$laporan['laporan'] = $this->ModelLaporan->get()->result();
		$this->load->view('template/head');
		$this->load->view('home/menu');
		$this->load->view('home/laporan', $laporan);
		$this->load->view('template/foot');
	}

	function agenda($id){
		$item['item'] = $this->ModelAgenda->get_where($id)->result();
		$this->load->view('template/head');
		$this->load->view('home/menu');
		$this->load->view('home/agenda', $item);
		$this->load->view('template/foot');
	}
}