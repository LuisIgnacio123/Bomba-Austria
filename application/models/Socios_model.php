    <?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Socios_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function listar()
    {
        $this->db->order_by('socio_nombre', 'asc');

        $query = $this->db->get('socios');

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $value) {
                $data[] = $value;
            }
            return $data;
        } else {
        return false;
        }
    }

    public function guardar($datos)
    {
        $this->db->insert('socios', $datos);
        if($this->db->affected_rows() < 0) {
            return false;
        } else {
            $this->session->set_userdata('socio_id', $this->db->insert_id());
            return true;
        }
    }

}