<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Recaudador_model extends CI_Model
{

	public function listar($nombre_usuario){
		$this->db->where('usuarios.usuario_nombre',$nombre_usuario);	
		$this->db->where('boleta_estado',1);
		$this->db->select('boletas.boleta_aporte');
		$this->db->select('boletas.boleta_fecha');
		$this->db->join('talonarios','boletas.boleta_talonario = talonarios.talonario_id');
		$this->db->join('usuarios', 'talonarios.talonario_recaudador = usuarios.usuario_id');
		$this->db->join('privilegios','privilegios.privilegio_id = usuarios.usuario_privilegio');
		$this->db->order_by("boletas.boleta_fecha");
		$query = $this->db->get('boletas');

		return $query->result();

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

	public function anularRecibo($id){
		$this->db->set('boleta_estado',0);
		$this->db->where('boletas_id',$id);
		$this->db->update('boletas');
		return true;
	}

	public function mostrarRecibo($recibo){
		$this->db->select("boleta_talonario as talonario");
		$this->db->select("boleta_nombre_socio as nombre");
		$this->db->select("boleta_fecha as fecha");
		$this->db->select("boleta_aporte as monto");
		$this->db->select("socios.socio_direccion as direccion");
		$this->db->select("socios.socio_sector as sector");
		$this->db->join('socios', 'boleta_codigo = socios.socio_id');


		$this->db->where('boletas_id', $recibo);
		$this->db->where('boleta_estado',1);
		//$this->db->where('boletas_id',$id);

		$consulta = $this->db->get('boletas');

		return $consulta->row();

	}

	public function buscarSocioID($id){
		$this->db->select('socio_nombre as nombre');
		$this->db->select('socio_direccion as direccion');
		$this->db->select('socio_sector as sector');

		$this->db->where('socio_id', $id);
		$this->db->where('socio_estado', 1);

		$consulta = $this->db->get('socios');
		return $consulta->row();
	}


	public function buscarSocioNombre($nombre){
		$this->db->select('socio_id as id');
		$this->db->select('socio_direccion as direccion');
		$this->db->select('socio_sector as sector');

		$this->db->where('socio_nombre', $nombre);
		$this->db->where('socio_estado', 1);

		$consulta = $this->db->get('socios');
		return $consulta->row();	
	}

	public function buscarSocioDir($dir){
		$this->db->select('socio_id as id');
		$this->db->select('socio_nombre as nombre');
		$this->db->select('socio_sector as sector');

		$this->db->where('socio_direccion',$dir);
		$this->db->where('socio_estado',1);

		$consulta = $this->db->get('socios');
		return $consulta->row();
	}

}