<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recaudador extends CI_Controller {
	public function __construct()
    {
        parent::__construct();

        // incluyen Modelo
        $this->load->model('Recaudador_model');
        $this->load->model('Socios_model');
        //$this->output->enable_profiler(true);
    }

	public function index()
	{
		$this->load->view('comunes/head');
		$this->load->view('comunes/menu-lateral-recaudador');
		$this->load->view('comunes/menu-superior');
		$this->load->view('recaudador/recaudador');
		$this->load->view('comunes/footer');
	}

	public function realizarPago()
	{
		$this->load->view('comunes/head');
		$this->load->view('comunes/menu-lateral-recaudador');
		$this->load->view('comunes/menu-superior');
		$this->load->view('pagos/nuevo_pago');
		$this->load->view('comunes/footer');
	}

	public function ingresarSocio()
	{
		$this->load->view('comunes/head');
		$this->load->view('comunes/menu-lateral-recaudador');
		$this->load->view('comunes/menu-superior');
		$this->load->view('socios/socio-nuevo');
		$this->load->view('comunes/footer');
	}


	public function anularBoleta()
	{
		$this->load->view('comunes/head');
		$this->load->view('comunes/menu-lateral-recaudador');
		$this->load->view('comunes/menu-superior');
		$this->load->view('pagos/anular_pago');
		$this->load->view('comunes/footer');
	}

	public function guardar()
	{
		$this->form_validation->set_rules('Nombre', 'nombre', 'required|trim|strip_tags');
		$this->form_validation->set_rules('Apellido', 'apellido', 'required|trim|strip_tags');
		$this->form_validation->set_rules('Rut', 'rut', 'required|trim|strip_tags|is_unique[socios.socio_rut]|callback_rut');
		$this->form_validation->set_rules('Direccion', 'direccion', 'required|trim|strip_tags');
		$this->form_validation->set_rules('Telefono', 'telefono', 'required|trim|strip_tags');
		$this->form_validation->set_rules('Monto', 'monto', 'required|trim|strip_tags');

		$this->form_validation->set_message('check_captcha', 'texte dibt natch captcha');
		$this->form_validation->set_message('rut', 'El {field} no es Valido');

		if($this->form_validation->run() === false) {
			$this->session->set_flashdata('query', validation_errors());
			$this->session->set_flashdata('query_alert', 'alert-danger');

			$datos["socio"] = $this->Socios_model->listar();

			$this->load->view('comunes/head',$datos);
			$this->load->view('comunes/menu-lateral-recaudador');
			$this->load->view('comunes/menu-superior');
			$this->load->view('socios/socio-nuevo');
			$this->load->view('comunes/footer');
		} 
		else {
			$nombre = $this->input->post('Nombre').' '.$this->input->post('Apellido');
			$fecha = $this->input->post('Fecha_Nac');
			$fecha_nac = explode('/',$fecha);
			$nfecha = "{$fecha_nac[2]}-{$fecha_nac[1]}-{$fecha_nac[0]}";
			$datos = array (
				'socio_nombre'		=> $nombre,
				'socio_rut'			=> $this->input->post('Rut'),
				'socio_direccion'	=> $this->input->post('Direccion'),
				//'socio_sector'		=> $this->input->post('Sector'),
				'socio_fecha_nacimiento' => $nfecha,
				'socio_telefono'	=> $this->input->post('Telefono'),
				'socio_estado'		=> 1,
			);

			if($this->Socios_model->guardar($datos)){
				$this->session->set_flashdata('query', 'Guardado con Exito');
				$this->session->set_flashdata('query_alert', 'alert-success');
				redirect(base_url('Recaudador/ingresarSocio'), 'refresh');
			} else {
				// no se Guarda
				$this->session->set_flashdata('query', 'Problemas al Guardar');
				$this->session->set_flashdata('query_alert', 'alert-danger');
				redirect(base_url('Recaudador/ingresarSocio'), 'refresh');
            }
		}
	}

	public function anular()
	{
		$recibo = $this->input->post('recibo');

		if($this->Recaudador_model->anularRecibo($recibo)){
			$this->session->set_flashdata('query', 'Anulada con Exito');
			$this->session->set_flashdata('query_alert', 'alert-success');
			redirect(base_url('Recaudador/anularBoleta'), 'refresh');
		}
		else{
			$this->session->set_flashdata('query', 'Error al anular');
			$this->session->set_flashdata('query_alert', 'alert-success');
			redirect(base_url('Recaudador/anularBoleta'), 'refresh');	
		}
		
	}

	public function guardarpago()
	{
		$this->form_validation->set_rules('Talonario', 'talonario', 'required|trim|strip_tags');
		$this->form_validation->set_rules('Boleta', 'boleta', 'required|trim|strip_tags');
		$this->form_validation->set_rules('N_Socio', 'n_socio', 'required|trim|strip_tags');
		$this->form_validation->set_rules('Direccion', 'direccion', 'required|trim|strip_tags');
		$this->form_validation->set_rules('Monto', 'monto', 'required|trim|strip_tags|xss_clean');


		if($this->form_validation->run() === false) {
			$this->session->set_flashdata('query', validation_errors());
			$this->session->set_flashdata('query_alert', 'alert-danger');

			$this->load->view('comunes/head');
			$this->load->view('comunes/menu-lateral-recaudador');
			$this->load->view('comunes/menu-superior');
			$this->load->view('pagos/nuevo_pago');
			$this->load->view('comunes/footer');
		} else {
			$nombre = $this->input->post('N_Socio');
			$talonario = $this->input->post('Talonario');
			$boleta = $this->input->post('Boleta');
			$id_socio = $this->input->post('socio_id');
			$direccion = $this->input->post('Direccion');
			$sector = $this->input->post('Sector');
			$cantidad_meses = $this->input->post('meses');

			$fecha = $this->input->post('FechaPago');
			$fecha_in = explode('/',$fecha);
			$nfecha = "{$fecha_in[2]}-{$fecha_in[1]}-{$fecha_in[0]}";

			$fecha_in[1]= $fecha_in[1] + $cantidad_meses;
			
			if ($fecha_in[1] > 12) {
				$fecha_in[2] += 1;
				$fecha_in[1] = 0;
				$fecha_in[1] = $cantidad_meses;
				$fecha_fin = "{$fecha_in[2]}-{$fecha_in[1]}-{$fecha_in[0]}";
				
			}
			else{
				$fecha_fin = "{$fecha_in[2]}-{$fecha_in[1]}-{$fecha_in[0]}";
			}

			$monto = $this->input->post('Monto');
			
			
			

			$datos = array (
				'boleta_nombre_socio'	=> $nombre,
				'boleta_fecha'			=> $nfecha,
				'boleta_cantidad'		=> $cantidad_meses,
				'boleta_aporte' 		=> $monto,
				'boleta_codigo'			=> $id_socio,
				'boleta_talonario'		=> $talonario,
				'boleta_lim_fecha'		=> $fecha_fin,
				'boleta_estado'			=> 1,
			);

			if($this->Recaudador_model->guardarpago($datos)){
				$this->session->set_flashdata('query', 'Guardado con Exito');
				$this->session->set_flashdata('query_alert', 'alert-success');
				redirect(base_url('Recaudador/realizarPago'), 'refresh');
			} else {
				// no se Guarda
				$this->session->set_flashdata('query', 'Problemas al Guardar');
				$this->session->set_flashdata('query_alert', 'alert-danger');
				redirect(base_url('Recaudador/realizarPago'), 'refresh');
            }
		}

	}

	public function try(){
	//	echo json_encode($this->Recaudador_model->mostrarRecibo($_POST["recibo"] = 3));
	//	echo json_encode($this->Recaudador_model->listar('Luis Aguilera'));
	//	echo json_encode($this->Recaudador_model->buscarSocioID($_POST["socio_id"] = 5));
	//	echo json_encode($this->Recaudador_model->buscarSocioNombre($_POST["N_Socio"] = "felipe rivas"));
	//	echo json_encode($this->Recaudador_model->buscarSocioDir($_POST["Direccion"] = "Quemchi 6193"));


	}

	public function buscar_boleta(){
		$recibo = $this->input->post('recibo');
		$datos = $this->Recaudador_model->mostrarRecibo($recibo);
		echo json_encode($datos);

	}

	public function graficar(){
		 $nombre = $this->session->userdata('login_nombre');
		 $datos = $this->Recaudador_model->listar($nombre);
		 echo json_encode($datos);
	}

	//buscar socio de nuevo pago por id
	public function buscar_idsocio(){
		$id = $this->input->post('socio_id');
		$datos = $this->Recaudador_model->buscarSocioID($id);
		echo json_encode($datos);
	}

	//buscar socio de nuevo pago por nombre
	public function buscar_nombresocio(){
		$nombre = $this->input->post('N_Socio');
		$datos = $this->Recaudador_model->buscarSocioNombre($nombre);
		echo json_encode($datos);
	}

	//buscar socio de nuevo pago por direccion
	public function buscar_dirsocio(){
		$dir = $this->input->post('Direccion');
		$datos = $this->Recaudador_model->buscarSocioDir($dir);
		echo json_encode($datos);
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