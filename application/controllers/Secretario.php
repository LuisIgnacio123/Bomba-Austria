<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secretario extends CI_Controller {
		public function __construct()
    {
        parent::__construct();

        // incluyen Modelo
        $this->load->model('Secretario_model');
        $this->load->model('Socios_model');
        //$this->output->enable_profiler(true);
    }

    public function index(){
		$this->load->view('comunes/head');
		$this->load->view('comunes/menu-lateral-secretario');
		$this->load->view('comunes/menu-superior');
		$this->load->view('secretario/secretario');
		$this->load->view('comunes/footer');
	}

   public function ingresar_recaudador(){
		$this->load->view('comunes/head');
		$this->load->view('comunes/menu-lateral-secretario');
		$this->load->view('comunes/menu-superior');
		$this->load->view('secretario/ingresarRecaudador');
		$this->load->view('comunes/footer');
	}
}