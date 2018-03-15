<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Secretario_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

	public function guardar($datos){
		$this->db->insert('usuarios', $datos);
        if($this->db->affected_rows() < 0) {
            return false;
        } else {
            $this->session->set_userdata('socio_id', $this->db->insert_id());
            return true;
        }
	}

    public function listar(){
        $this->db->order_by('usuario_nombre');
        $this->db->select('usuario_nombre, usuario_rut,');
        $this->db->where('usuario_privilegio',1);
        $query = $this->db->get('usuarios');

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $value) {
                $data[] = $value;
            }
            return $data;
        } else {
            return false;
        }
    }
}
