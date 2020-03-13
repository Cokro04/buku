<?php
class Tbl_bobot_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    function get_tbl_bobot($id_bobot)
    {
        return $this->db->get_where('tbl_bobot',array('id_bobot'=>$id_bobot))->row_array();
    }
        
    function get_all_tbl_bobot()
    {
        $this->db->order_by('id_bobot', 'desc');
        return $this->db->get('tbl_bobot')->result_array();
    }
        
    function add_tbl_bobot($params)
    {
        $this->db->insert('tbl_bobot',$params);
        return $this->db->insert_id();
    }
    
    function update_tbl_bobot($id_bobot,$params)
    {
        $this->db->where('id_bobot',$id_bobot);
        return $this->db->update('tbl_bobot',$params);
    }
    
    function delete_tbl_bobot($id_bobot)
    {
        return $this->db->delete('tbl_bobot',array('id_bobot'=>$id_bobot));
    }
}
