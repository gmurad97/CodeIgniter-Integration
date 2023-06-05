<?php

class AdminModel extends CI_Model
{
    public function admin_get_db_row($data)
    {
        return $this->db->select("a_firstname,a_lastname,a_img")->where($data)->get("admin")->row_array();
    }

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

    public function about_us_insert_db($data)
    {
        $this->db->insert("about_us", $data);
    }

    public function about_us_get_db()
    {
        return $this->db->order_by("au_id", "DESC")->limit(1)->get("about_us")->row_array();
    }

    public function about_us_update_db($data)
    {
        $this->db->update("about_us", $data);
    }

    public function about_us_delete_db()
    {
        $this->db->empty_table("about_us");
    }

    public function services_insert_db($data)
    {
        $this->db->insert("services", $data);
    }

    public function services_get_db()
    {
        return $this->db->order_by("s_id", "DESC")->get("services")->result_array();
    }

    public function services_get_db_row($s_id)
    {
        return $this->db->where("s_id", $s_id)->get("services")->row_array();
    }

    public function services_update_db($s_id, $data)
    {
        $this->db->where("s_id", $s_id)->update("services", $data);
    }

    public function services_delete_db($s_id)
    {
        $this->db->where("s_id", $s_id)->delete("services");
    }





    public function logo_insert_db($data)
    {
        $this->db->insert("logo", $data);
    }

    
}
