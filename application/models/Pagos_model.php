<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Pagos_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function listar()
    {
        $this->db->order_by('pago_fecha', 'asc');
        $this->db->select('pagos.pago_fecha, pagos.pago_cliente, pagos.pago_monto, servicios.servicio_nombre');
        $this->db->join('servicios', 'servicios.servicio_id = pagos.pago_servicios');
        $query = $this->db->get('pagos');

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
