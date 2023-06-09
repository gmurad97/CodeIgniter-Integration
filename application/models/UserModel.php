<?php

class UserModel extends CI_Model
{
    public function team_get_db()
    {
        return $this->db->select("t_firstname,t_position,
                        t_email,t_mobile,
                        t_whatsapp,t_instagram,
                        t_youtube,t_facebook,
                        t_telegram,t_img,t_status")->where("t_status", "active")->limit(6)->get("team")->result_array();
    }
    public function about_us_get_db()
    {
        return $this->db->order_by("au_id", "DESC")->limit(1)->get("about_us")->row_array();
    }

    public function services_get_db()
    {
        return $this->db->order_by("s_id", "DESC")->get("services")->result_array();
    }

    public function logo_get_db()
    {
        return $this->db->order_by("l_id", "DESC")->limit(1)->get("logo")->row_array();
    }

    public function header_lending_get_db()
    {
        return $this->db->order_by("hl_id", "DESC")->limit(1)->get("header_lending")->row_array();
    }

    public function price_get_db()
    {
        return $this->db->order_by("p_id", "DESC")->limit(1)->get("price")->row_array();
    }

    public function working_hours_get_db()
    {
        return $this->db->order_by("wh_id", "DESC")->limit(1)->get("working_hours")->row_array();
    }

    public function testimonial_get_db()
    {
        return $this->db->order_by("t_id", "DESC")->limit(6)->get("testimonial")->result_array();
    }

    public function footer_get_db()
    {
        return $this->db->order_by("f_id", "DESC")->limit(1)->get("footer")->row_array();
    }

    public function gallery_get_db()
    {
        return $this->db->order_by("g_id", "DESC")->get("gallery")->result_array();
    }

    public function gmap_get_db()
    {
        return $this->db->order_by("g_id", "DESC")->limit(1)->get("google_map")->row_array();
    }
}
