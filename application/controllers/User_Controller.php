<?php

class User_Controller extends CI_Controller
{
    public function index()
    {
        $this->load->view("users/index");
    }

    public function about()
    {
        $this->load->view("users/about");
    }

    public function service()
    {
        $this->load->view("users/service");
    }

    public function gallery()
    {
        $this->load->view("users/gallery");
    }

    public function contact()
    {
        $this->load->view("users/contact");
    }
}
