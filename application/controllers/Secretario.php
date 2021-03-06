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

	public function visualizarRecaudador(){
		$datos["usuarios"] = $this->Secretario_model->listar();

		$this->load->view('comunes/head',$datos);
		$this->load->view('comunes/menu-lateral-secretario');
		$this->load->view('comunes/menu-superior');
		$this->load->view('secretario/visualizarRecaudador');
		$this->load->view('comunes/footer');
	}

	public function visualizarSocios(){
		$datos["socios"] = $this->Secretario_model->listar_socio();

		$this->load->view('comunes/head',$datos);
		$this->load->view('comunes/menu-lateral-secretario');
		$this->load->view('comunes/menu-superior');
		$this->load->view('secretario/visualizarSocios');
		$this->load->view('comunes/footer');
	}

	public function editarRecaudador(){
		$datos['usuario'] = $this->Secretario_model->buscar_usuario($this->input->post('rut'));

		//echo json_encode($datos['usuario']);

		$datos["dataEdit_RUT"] = $datos['usuario']->usuario_rut;
		$datos["dataEdit_Name"] = $datos['usuario']->usuario_nombre;
		$datos["dataEdit_Privilege"] = $datos['usuario']->privilegio_nombre;

		if ($datos["usuario"]->usuario_estado == 1) {
			//$datos["usuario"]->usuario_estado = "activo";
			$datos["dataEdit_State"] = "activo";

		}
		else{
			$datos["dataEdit_State"] = "inactivo";
		}

		//if ($datos["usuario"]->usuario_estado == '0') {
		//	$datos["usuario"]->usuario_estado = "inactivo";
		//}

		$this->load->view('comunes/head',$datos);
		$this->load->view('comunes/menu-lateral-secretario');
		$this->load->view('comunes/menu-superior');
		$this->load->view('secretario/modificarRecaudador');
		$this->load->view('comunes/footer');
	}

	public function actualizar_recaudador(){
		$privilegio = 0;
		if ($this->input->post('privilegio') == 'Recaudador') {
			$privilegio = 1;
		}
		$datos = array(
			'usuario_rut'			=> $this->input->post('rut'),
			'usuario_nombre'		=> $this->input->post('nombre'),
			'usuario_privilegio'	=> $privilegio,
			'usuario_estado'		=> $this->input->post('estado'),
		);

		if($this->Secretario_model->actualizar_usuario($datos)){
				$this->session->set_flashdata('query', 'Guardado con Exito');
				$this->session->set_flashdata('query_alert', 'alert-success');
				redirect(base_url('Secretario/visualizarRecaudador'), 'refresh');
			} else {
				// no se Guarda
				$this->session->set_flashdata('query', 'Problemas al Guardar');
				$this->session->set_flashdata('query_alert', 'alert-danger');
				redirect(base_url('Secretario/visualizarRecaudador'), 'refresh');
            }

	}


	public function guardar_recaudador(){
		$this->form_validation->set_rules('Nombre', 'nombre', 'required|trim|strip_tags');
		$this->form_validation->set_rules('Apellido', 'apellido', 'required|trim|strip_tags');
		$this->form_validation->set_rules('Rut', 'rut', 'required|trim|strip_tags');
		$this->form_validation->set_rules('password', 'required|trim|strip_tags');

		$this->form_validation->set_message('Rut', 'El {field} no es Valido');

		if($this->form_validation->run() === false) {
			$this->session->set_flashdata('query', validation_errors());
			$this->session->set_flashdata('query_alert', 'alert-danger');
			
			$this->load->view('comunes/head');
			$this->load->view('comunes/menu-lateral-secretario');
			$this->load->view('comunes/menu-superior');
			$this->load->view('secretario/ingresarRecaudador');
			$this->load->view('comunes/footer');
		} else {
			$nombre = $this->input->post('Nombre').' '.$this->input->post('Apellido');
			$password = sha1($this->input->post('password'));
			$datos = array (
				'usuario_nombre'		=> $nombre,
				'usuario_rut'			=> $this->input->post('Rut'),
				'usuario_password'	 	=> $password,
				'usuario_privilegio'	=> 1,
				'usuario_estado'		=> 1,
			);

			if($this->Secretario_model->guardar($datos)){
				$this->session->set_flashdata('query', 'Guardado con Exito');
				$this->session->set_flashdata('query_alert', 'alert-success');
				redirect(base_url('Secretario/ingresar_recaudador'), 'refresh');
			} else {
				// no se Guarda
				$this->session->set_flashdata('query', 'Problemas al Guardar');
				$this->session->set_flashdata('query_alert', 'alert-danger');
				redirect(base_url('Secretario/ingresar_recaudador'), 'refresh');
            }
		}
	
	}

	public function rut($r = false){

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