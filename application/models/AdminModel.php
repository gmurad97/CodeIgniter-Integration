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

    /*BEGIN - DB ROWS CONTROL*/
    public function xl_rows_control($tableName, $idDbName)
    {
        $about_us_rows_count = $this->db->from($tableName)->count_all_results();
        if ($about_us_rows_count == 1) {
            return $this->db->get($tableName)->row_array()[$idDbName];
        } else if ($about_us_rows_count > 1) {
            return $this->db->order_by($idDbName, "DESC")->limit(1)->get($tableName)->row_array()[$idDbName];
        } else {
            return -1;
        }
    }
    /*ENDED - DB ROWS CONTROL*/

    public function about_us_insert_db($data)
    {
        $this->db->insert("about_us", $data);
    }

    public function about_us_get_db($id)
    {
        //$id = $this->xl_rows_control("about_us","au_id");
        return $this->db->where("au_id", $id)->get("about_us")->row_array();
    }

    public function about_us_update_db($data, $id)
    {
        //$id = $this->xl_rows_control("about_us","au_id");
        $this->db->where("au_id", $id)->update("about_us", $data);
    }

    public function about_us_delete_db($id)
    {
        //$id = $this->xl_rows_control("about_us","au_id");
        $this->db->where("au_id", $id)->delete("about_us");
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

    public function logo_get_db($id)
    {
        return $this->db->where("l_id", $id)->get("logo")->row_array();
    }

    public function logo_update_db($id, $data)
    {
        $this->db->where("l_id", $id)->update("logo", $data);
    }

    public function logo_delete_db($id)
    {
        $this->db->where("l_id", $id)->delete("logo");
    }

    public function header_lending_create_db($data)
    {
        $this->db->insert("header_lending", $data);
    }

    public function header_lending_get_db($id)
    {
        return $this->db->where("hl_id", $id)->get("header_lending")->row_array();
    }

    public function header_lending_update_db($id, $data)
    {
        $this->db->where("hl_id", $id)->update("header_lending", $data);
    }

    public function header_lending_delete_db($id)
    {
        $this->db->where("hl_id", $id)->delete("header_lending");
    }

    public function price_create($data)
    {
        $this->db->insert("price", $data);
    }

    public function price_get($id)
    {
        return $this->db->where("p_id", $id)->get("price")->row_array();
    }

    public function price_edit($id, $data)
    {
        $this->db->where("p_id", $id)->update("price", $data);
    }

    public function price_delete($id)
    {
        $this->db->where("p_id", $id)->delete("price");
    }

    public function working_hours_create($data)
    {
        $this->db->insert("working_hours", $data);
    }

    public function working_hours_get($id)
    {
        return $this->db->where("wh_id", $id)->get("working_hours")->row_array();
    }

    public function working_hours_edit($id, $data)
    {
        $this->db->where("wh_id", $id)->update("working_hours", $data);
    }

    public function working_hours_delete($id)
    {
        $this->db->where("wh_id", $id)->delete("working_hours");
    }

    public function testimonial_create($data)
    {
        $this->db->insert("testimonial", $data);
    }

    public function testimonial_get_all()
    {
        return $this->db->order_by("t_id", "DESC")->get("testimonial")->result_array();
    }

    public function testimonial_id_get($id)
    {
        return $this->db->where("t_id", $id)->get("testimonial")->row_array();
    }

    public function testimonial_id_update($id, $data)
    {
        $this->db->where("t_id", $id)->update("testimonial", $data);
    }

    public function testimonial_delete($id)
    {
        $this->db->where("t_id", $id)->delete("testimonial");
    }
}
