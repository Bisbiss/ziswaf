<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
        parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
        if ($this->session->userdata('status')!='user') {
            redirect('welcome');
        }
	}
	
	function index(){
		$this->load->view('template/head');
		$this->load->view('home/menu');
		$this->load->view('home/index');
		$this->load->view('template/head');
	}
	function keluar(){

	}
}