<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Login_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function validar_usuario($username, $password)
    {

        $this->db->where('usuario_rut', $username);
        $this->db->where('usuario_password', $password);
        $this->db->where('usuario_estado', 1); // hay que verificar el estado
        $this->db->join('privilegios', 'privilegios.privilegio_id = usuarios.usuario_privilegio');
        
        $query = $this->db->get('usuarios', 'privilegios');

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }

}