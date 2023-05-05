<?php

class AdminController extends CI_Controller{
    public function login(){
        $this->load->view("admins/login");
    }
    public function index(){
        $this->load->view("admins/index");
    }

    public function list(){
        $this->load->view("admins/product/list");
    }
    public function create(){
        $this->load->view("admins/product/create");
    }
}