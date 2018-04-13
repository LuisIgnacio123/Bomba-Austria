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

    public function buscar_usuario($rut){
        $this->db->select("privilegios.privilegio_nombre");
        $this->db->select("usuarios.usuario_rut");
        $this->db->select("usuarios.usuario_nombre");
        $this->db->select("usuarios.usuario_estado");
        $this->db->where('usuario_rut',$rut);
        $this->db->join('privilegios','privilegios.privilegio_id = usuarios.usuario_privilegio');

        $consulta = $this->db->get('usuarios');
        return $consulta->row();
    }

    public function actualizar_usuario($datos){
        $this->db->where('usuario_rut',$datos['usuario_rut']);
        $this->db->update('usuarios',$datos);
        if ($this->db->affected_rows() < 0) {
            return false;
        } else{
            $this->session->set_userdata('socio_id', $this->db->insert_id());
            return true;
        }
    }

    public function listar_socio(){
        $this->db->order_by('socio_nombre');
        $query= $this->db->get('socios');
        if ($query->num_rows() > 0) {
           foreach ($query->result() as $value) {
                $data[] = $value;
            }
            return $data;
        } 
        else {
            return false;
        }
    }
}
