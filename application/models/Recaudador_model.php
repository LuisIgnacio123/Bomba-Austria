<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Recaudador_model extends CI_Model
{

	public function listar(){
		$this->db->join('talonarios','boletas.boleta_talonario = talonarios.talonario_id');
		$this->db->join('usuarios', 'talonarios.talonario_id = usuarios.usuario_id');
		$this->db->join('privilegios','privilegios.privilegio_id = usuarios.usuario_id');

		$query = $this->db->get('boletas');

		return $query->result();

	}

	public function buscador($buscado){
		$this->db->order_by('socio_id');
		$this->db->like("socio_nombre",$buscado);
		return $this->db->get('socios')->result_array();
	}

	public function guardarpago($datos){
		$this->db->insert('boletas', $datos);
        if($this->db->affected_rows() < 0) {
            return false;
        } else {
            $this->session->set_userdata('socio_id', $this->db->insert_id());
            return true;
        }
	}

	public function anularRecibo($id,$talonario){
		$this->db->set('boleta_estado',0);
		$this->db->where('boleta_talonario',$talonario);
		$this->db->where('boletas_id',$id);
		$this->db->update('boletas');
		return true;
	}

}