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

}