<?php
class Entropy_model extends CI_Model
{
    public function get_criteria($where)
    {
        $this->db->select('*');
        $query = $this->db->get_where('tbl_alternatif', array('id_user' => $where));
        return $query->result();
    }

    public function sumdata($where)
    {
        $this->db->select_sum('kriteria_1', 'c1');
        $this->db->select_sum('kriteria_2', 'c2');
        $this->db->select_sum('kriteria_3', 'c3');
        $this->db->select_sum('kriteria_4', 'c4');
        $query = $this->db->get_where('tbl_alternatif', array('id_user' => $where));
        return $query;
    }
}
