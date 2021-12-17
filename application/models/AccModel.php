<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccModel extends CI_Model {
    public function Store($data) {
        $this->db->insert('accessories', $data);

        return $this->db->affected_rows();
    }

    public function Find($id_barang) {
        return $this->db->where('id_barang', $id_barang)
            ->get('accessories')
            ->row();
    }

    public function Update($id_barang, $data) {
        $this->db->where('id_barang', $id_barang)
            ->update('accessories', $data);

        return $this->db->affected_rows();
    }

    public function Destroy($id_barang) {
        $this->db->where('id_barang', $id_barang)
            ->delete('accessories');

        return $this->db->affected_rows();
    }
   
}