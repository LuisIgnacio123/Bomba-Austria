<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
      $this->load->model('Login_model');
      $this->output->enable_profiler(false);
  	}

    public function token(){
        $token = sha1(md5(rand()));
        $this->session->set_userdata('token', $token);
        return $token;
    }

	public function index()
	{
		$datos['token']         = $this->token();
        $datos['pagina_titulo'] = 'Bomba Austria';

	//	$this->load->view('comunes/head');
		$this->load->view('login/login_vista', $datos);
	}

	public function validar()
    {
        if ($this->input->post('token') && $this->input->post('token') === $this->session->userdata('token')) {

            $this->form_validation->set_rules('username', 'Username', 'required|trim|callback_rut');
            $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[2]|max_length[100]');

            $this->form_validation->set_message('username', 'Verificación de Rut Incorrecta');

            if ($this->form_validation->run() === false) {

                $datos['token'] = $this->token();

                $this->session->set_flashdata('query', validation_errors());
                $this->session->set_flashdata('query_alert', 'alert-danger');

                $this->load->view('login/login_vista', $datos);
            } else {

                $username      = $this->input->post('username');
                $password = sha1($this->input->post('password'));

                $login = $this->Login_model->validar_usuario($username, $password);

                if ($login == true) {
                    $data = array(
                        'login_estado'        => true,
                        'login_id'            => $login->usuario_id,
                        'login_nombre'        => $login->usuario_nombre,
                        'login_privilegio'    => $login->usuario_privilegio,
                    );

                    $this->session->set_userdata($data);

                    if ($login->usuario_privilegio == 1) {
                        redirect(base_url('Recaudador'),'refresh');
                    }

                    elseif ($login->usuario_privilegio == 2) {
                        redirect(base_url('Inicio'), 'refresh');
                    }

                    elseif ($login->usuario_privilegio == 3) {
                        redirect(base_url('Inicio'), 'refresh');
                    }

                    //redirect(base_url('Inicio'), 'refresh');

                } else {
                    $datos['token'] = $this->token();
                    $this->session->set_flashdata('query', 'Rut y/o Password incorrecta');
                    $this->session->set_flashdata('query_alert', 'alert-danger');

                    $this->load->view('login/login_vista', $datos);
                }
                
            }
        } else {
            $datos['token'] = $this->token();
            $this->session->set_flashdata('query', 'Se detecta Problemas de Seguridad');
            $this->session->set_flashdata('query_alert', 'alert-danger');

            $this->load->view('login/login_vista', $datos);
        }
    }

    public function salir()
    {
        $this->session->sess_destroy();
        redirect(base_url() . 'login/login_vista');
    }

    public function password_recuperar()
    {

        $this->load->view('login/login_recuperar');
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