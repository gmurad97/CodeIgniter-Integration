<?php

class UserController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("UserModel");
    }

    public function xlb_user_index()
    {
        $data["team_get_db"] = $this->UserModel->team_get_db();
        $data["about_us_get_db"] = $this->UserModel->about_us_get_db();
        $data["services_get_db"] = $this->UserModel->services_get_db();
        $this->load->view("user/Index", $data);
    }

    public function xlb_user_service()
    {
        $this->load->view("user/Service");
    }

    public function xlb_user_gallery()
    {
        $this->load->view("user/Gallery");
    }

    public function xlb_user_contact()
    {
        $this->load->view("user/Contact");
    }

    public function xlb_user_about()
    {
        $this->load->view("user/About");
    }
}
