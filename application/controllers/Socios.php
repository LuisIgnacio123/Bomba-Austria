<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Socios extends CI_Controller {

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
        $this->load->model('Socios_model');
    }

	public function index()
	{
		$datos["socio"] = $this->Socios_model->listar();

		$this->load->view('comunes/head', $datos);
		$this->load->view('comunes/menu-lateral');
		$this->load->view('comunes/menu-superior');
		$this->load->view('socios/socios');
		$this->load->view('socios/sociosScript');
	}

	public function guardar()
	{
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


	public function rut($r = false)
    {
		if ((!$r) or (is_array($r))) {
 			return false;
		} /* Hace falta el rut */
		if (!$r = preg_replace('|[^0-9kK]|i', '', $r)) {
			return false;
		} /* Era código basura */
		if (!((strlen($r) == 8) or (strlen($r) == 9))) {
			return false;
		} /* La cantidad de carácteres no es válida. */
		$v = strtoupper(substr($r, -1));
		if (!$r = substr($r, 0, -1)) {
			return false;
		}
		if (!((int) $r > 0)) {
			return false;
		} /* No es un valor numérico */
		$x = 2;
		$s = 0;
		for ($i = (strlen($r) - 1); $i >= 0; $i--) {
			if ($x > 7) {
				$x = 2;
			}
			$s += ($r[$i] * $x);
			$x++;
		}
		$dv = 11 - ($s % 11);
		if ($dv == 10) {
			$dv = 'K';
		}
		if ($dv == 11) {
			$dv = '0';
		}
		if ($dv == $v) {
			return number_format($r, 0, '', '') . '-' . $v;
		} /* Formatea el RUT */
		return false;
	}
}
