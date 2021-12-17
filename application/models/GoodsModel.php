<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GoodsModel extends CI_Model {
    public function Store($data) {
        $this->db->insert('goods', $data);

        return $this->db->affected_rows();
    }

    public function Find($id) {
        return $this->db->where('id', $id)
            ->get('goods')
            ->row();
    }

    public function Update($id, $data) {
        $this->db->where('id', $id)
            ->update('goods', $data);

        return $this->db->affected_rows();
    }

    public function Destroy($id) {
        $this->db->where('id', $id)
            ->delete('goods');

        return $this->db->affected_rows();
    }
   
}