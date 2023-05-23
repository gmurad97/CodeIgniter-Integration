<?php

class AdminModel extends CI_Model
{

    public function staff_db_insert($data)
    {
        $this->db->insert("user", $data);
    }

    public function staff_db_get_all($sortDescending)
    {
        //if sortDescending == true => get result_array sorted descending (uid)
        //else get result_array sorted ascending (uid)
        if ($sortDescending == true) {
            return $this->db->order_by("uid", "DESC")->get("user")->result_array();
        } else {
            return $this->db->order_by("uid", "ASC")->get("user")->result_array();
        }
    }

    public function staff_db_get_id($uid)
    {
        //where uid db == $uid get first match data
        return $this->db->where("uid", $uid)->get->row_array();
    }

    public function staff_db_del_id($uid)
    {
        //where uid db == $uid delete first match data
        return $this->db->where("uid", $uid)->delete("user");
    }
}
