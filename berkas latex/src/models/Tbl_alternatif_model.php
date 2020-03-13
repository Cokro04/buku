<?php
class Tbl_alternatif_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_tbl_alternatif($alternatif_id)
    {
        $this->db->select('*');
        $query = $this->db->get_where('tbl_alternatif', array('alternatif_id' => $alternatif_id));
        return $query->row_array();
    }

    function get_all_tbl_alternatif_admin()
    {
        $query = $this->db->get('tbl_alternatif');
        return $query->result_array();
    }

    function get_all_tbl_alternatif($where)
    {
        $this->db->select('*');
        $query = $this->db->get_where('tbl_alternatif', array('id_user' => $where));
        return $query->result_array();
    }

    function add_tbl_alternatif($params)
    {
        $this->db->insert('tbl_alternatif', $params);
        return $this->db->insert_id();
    }

    function update_tbl_alternatif($alternatif_id, $params)
    {
        $this->db->where('alternatif_id', $alternatif_id);
        return $this->db->update('tbl_alternatif', $params);
    }

    function delete_tbl_alternatif($alternatif_id)
    {
        return $this->db->delete('tbl_alternatif', array('alternatif_id' => $alternatif_id));
    }
}
