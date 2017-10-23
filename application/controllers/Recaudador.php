<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recaudador extends CI_Controller {
	public function __construct()
    {
        parent::__construct();

        // incluyen Modelo
        $this->load->model('Recaudador_model');
    }
	public function index(){
		$this->load->view('comunes/head');
		$this->load->view('comunes/menu-lateral-recaudador');
		$this->load->view('comunes/menu-superior');
		$this->load->view('recaudador/recaudador');
		$this->load->view('comunes/footer');
	}

	public function realizarPago(){
		$this->load->view('comunes/head');
		$this->load->view('comunes/menu-lateral-recaudador');
		$this->load->view('comunes/menu-superior');
		$this->load->view('pagos/nuevo_pago');
		$this->load->view('comunes/footer');
	}

	public function ingresarSocio(){
		$this->load->view('comunes/head');
		$this->load->view('comunes/menu-lateral-recaudador');
		$this->load->view('comunes/menu-superior');
		$this->load->view('socios/socio-nuevo');
		$this->load->view('comunes/footer');
	}


	public function anularBoleta(){
		$this->load->view('comunes/head');
		$this->load->view('comunes/menu-lateral-recaudador');
		$this->load->view('comunes/menu-superior');
		$this->load->view('pagos/anular_pago');
		$this->load->view('comunes/footer');
	}

	public function guardar(){
		$this->form_validation->set_rules('Nombre', 'nombre', 'required|trim|strip_tags');
		$this->form_validation->set_rules('Apellido', 'apellido', 'required|trim|strip_tags');
		$this->form_validation->set_rules('Rut', 'rut', 'required|trim|strip_tags|is_unique[socios.socio_rut]|callback_rut');
		$this->form_validation->set_rules('Direccion', 'direccion', 'required|trim|strip_tags');
		$this->form_validation->set_rules('Telefono', 'telefono', 'required|trim|strip_tags|xss_clean');
		$this->form_validation->set_rules('Correo', 'correo', 'required|trim|strip_tags|valid_emails');
		$this->form_validation->set_rules('Monto', 'monto', 'required|trim|strip_tags|xss_clean');

		$this->form_validation->set_message('Rut', 'El {field} no es Valido');

		if($this->form_validation->run() === false) {
			$this->session->set_flashdata('query', validation_errors());
			$this->session->set_flashdata('query_alert', 'alert-danger');

			$datos["socio"] = $this->Socios_model->listar();

			$this->load->view('comunes/head', $datos);
			$this->load->view('comunes/menu-lateral');
			$this->load->view('comunes/menu-superior');
			$this->load->view('socios/socio-nuevo');
			$this->load->view('comunes/footer');
		} else {
			$nombre = $this->input->post('Apellido').' '.$this->input->post('Nombre');
			$datos = array (
				'socio_nombre'		=> $nombre,
				'socio_rut'			=> $this->input->post('Rut'),
				'socio_direccion'	=> $this->input->post('Direccion'),
				'socio_telefono'	=> $this->input->post('Telefono'),
				'socio_correo'		=> $this->input->post('Correo'),
				'socio_estado'		=> 1,
			);

			if($this->Socios_model->guardar($datos)){
				$this->session->set_flashdata('query', 'Guardado con Exito');
				$this->session->set_flashdata('query_alert', 'alert-success');
				redirect(base_url('SocioNuevo'), 'refresh');
			} else {
				// no se Guarda
				$this->session->set_flashdata('query', 'Problemas al Guardar');
				$this->session->set_flashdata('query_alert', 'alert-danger');
				redirect(base_url('SocioNuevo'), 'refresh');
            }
		}
	}

	public function anular(){
		
	}


}