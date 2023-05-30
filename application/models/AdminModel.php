<?php

class AdminModel extends CI_Model
{
    public function team_insert_db($data)
    {
        $this->db->insert("team", $data);
    }

    public function team_get_db($sortDescending)
    {
        if ($sortDescending) {
            return $this->db->order_by("t_uid", "DESC")->get("team")->result_array();
        } else {
            return $this->db->order_by("t_uid", "ASC")->get("team")->result_array();
        }
    }

    public function team_get_db_row($t_uid)
    {
        return $this->db->where("t_uid", $t_uid)->get("team")->row_array();
    }

    public function team_delete_db_row($t_uid)
    {
        $this->db->where("t_uid", $t_uid)->delete("team");
    }

    public function team_edit_db_row($t_uid, $data)
    {
        $this->db->where("t_uid", $t_uid)->update("team", $data);
    }

    public function admin_get_db_row($data)
    {
        return $this->db->select("a_firstname,a_lastname,a_img")->where($data)->get("admin")->row_array();
    }
}
