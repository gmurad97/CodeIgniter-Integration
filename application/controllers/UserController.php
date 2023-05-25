<?php

class UserController extends CI_Controller
{
    public function xlb_user_index()
    {
        $this->load->view("user/Index");
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
