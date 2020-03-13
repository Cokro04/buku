<?php
class Tbl_user_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_tbl_user($user_id)
    {
        $tbl_user = $this->db->query("
            SELECT
                *

            FROM
                `tbl_user`

            WHERE
                `user_id` = ?
        ", array($user_id))->row_array();

        return $tbl_user;
    }
    function get_all_tbl_user()
    {
        $tbl_user = $this->db->query("
            SELECT
                *

            FROM
                `tbl_user`

            WHERE
                1 = 1

            ORDER BY `user_id` DESC
        ")->result_array();

        return $tbl_user;
    }
    function add_tbl_user($params)
    {
        $this->db->insert('tbl_user', $params);
        return $this->db->insert_id();
    }
    function update_tbl_user($user_id, $params)
    {
        $this->db->where('user_id', $user_id);
        return $this->db->update('tbl_user', $params);
    }
    function delete_tbl_user($user_id)
    {
        return $this->db->delete('tbl_user', array('user_id' => $user_id));
    }
}
