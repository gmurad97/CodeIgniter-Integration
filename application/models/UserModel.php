<?php

class UserModel extends CI_Model
{
    public function team_get_db()
    {
        return $this->db->select("t_firstname,t_position,
                        t_email,t_mobile,
                        t_whatsapp,t_instagram,
                        t_youtube,t_facebook,
                        t_telegram,t_img,t_status")->where("t_status","active")->limit(6)->get("team")->result_array();
    }
    public function about_us_get_db(){
        return $this->db->get("about_us")->row_array();
    }
}
