<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagos extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
    {
        parent::__construct();

        // incluyen Modelo
        $this->load->model('Pagos_model');
    }

	public function index()
	{
		$datos["pagos"] = $this->Pagos_model->listar();

		$this->load->view('comunes/head', $datos);
		$this->load->view('comunes/menu-lateral');
		$this->load->view('comunes/menu-superior');
		$this->load->view('pagos/busq_pago');
		$this->load->view('socios/sociosScrpt');
	}

	public function index2()
	{
		$this->load->view('comunes/head');
		$this->load->view('comunes/menu-lateral-recaudador');
		$this->load->view('comunes/menu-superior');
		$this->load->view('pagos/nuevo_pago');
		$this->load->view('comunes/footer');

	}
}