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
        $data["team_get_db"]            = $this->UserModel->team_get_db();
        $data["about_us_get_db"]        = $this->UserModel->about_us_get_db();
        $data["services_get_db"]        = $this->UserModel->services_get_db();
        $data["logo_get_db"]            = $this->UserModel->logo_get_db();
        $data["header_lending_get_db"]  = $this->UserModel->header_lending_get_db();
        $data["price_get_db"]           = $this->UserModel->price_get_db();
        $data["working_hours_get_db"]   = $this->UserModel->working_hours_get_db();
        $data["testimonial_get_db"]     = $this->UserModel->testimonial_get_db();
        $data["footer_get_db"]          = $this->UserModel->footer_get_db();
        $this->load->view("user/Index", $data);
    }

    public function xlb_user_service()
    {
        $data["logo_get_db"]            = $this->UserModel->logo_get_db();
        $data["services_get_db"]        = $this->UserModel->services_get_db();
        $data["price_get_db"]           = $this->UserModel->price_get_db();
        $data["testimonial_get_db"]     = $this->UserModel->testimonial_get_db();
        $data["footer_get_db"]          = $this->UserModel->footer_get_db();
        $this->load->view("user/Service", $data);
    }

    public function xlb_user_gallery()
    {
        $data["logo_get_db"]            = $this->UserModel->logo_get_db();
        $data["footer_get_db"]          = $this->UserModel->footer_get_db();
        $this->load->view("user/Gallery", $data);
    }

    public function xlb_user_contact()
    {
        $data["logo_get_db"]            = $this->UserModel->logo_get_db();
        $data["footer_get_db"]          = $this->UserModel->footer_get_db();
        $this->load->view("user/Contact", $data);
    }

    public function xlb_user_about()
    {
        $data["logo_get_db"]            = $this->UserModel->logo_get_db();
        $data["about_us_get_db"]        = $this->UserModel->about_us_get_db();
        $data["team_get_db"]            = $this->UserModel->team_get_db();
        $data["footer_get_db"]          = $this->UserModel->footer_get_db();
        $this->load->view("user/About", $data);
    }
}
