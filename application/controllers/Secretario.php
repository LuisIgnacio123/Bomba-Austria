<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secretario extends CI_Controller {
    public function index(){
		$this->load->view('comunes/head');
		$this->load->view('comunes/menu-lateral-secretario');
		$this->load->view('comunes/menu-superior');
		$this->load->view('secretario/secretario');
		$this->load->view('comunes/footer');
	}
}