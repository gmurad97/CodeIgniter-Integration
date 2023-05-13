<?php

class AdminController extends CI_Controller
{
    public function login()
    {
        $this->load->view("admins/login");
    }
    public function index()
    {
        $this->load->view("admins/index");
    }
    public function list()
    {
        $this->load->view("admins/staff/list");
    }
    public function create()
    {
        $this->load->view("admins/staff/create");
    }

    public function create_act()
    {
        $firstName = $_POST["first_name"];
        $lastName = $_POST["last_name"];
        $email = $_POST["email"];
        $description = $_POST["description"];
        $position = $_POST["position"];
        $mobile = $_POST["mobile"];
        $whatsapp = $_POST["whatsapp"];
        $facebook = $_POST["facebook"];
        $instagram = $_POST["instagram"];
        $telegram = $_POST["telegram"];
        $youtube = $_POST["youtube"];
        $acc_status = $_POST["acc_status"];
        $created_timestamp = time();
        /* $acc_photo = $_POST["acc_photo"]; */

        if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($description) && !empty($position)) {
            $data = [
                "firstName" => $firstName,
                "lastName" => $lastName,
                "email" => $email,
                "description" => $description,
                "mobile" => $mobile,
                "whatsapp" => $whatsapp,
                "facebook" => $facebook,
                "instagram" => $instagram,
                "telegram" => $telegram,
                "youtube" => $youtube,
                "acc_status" => $acc_status,
                "created_date" => $created_timestamp
            ];
            $this->db->insert("user", $data);
            redirect(base_url("adm_create"));
        } else {
            redirect($_SERVER["HTTP_REFERER"]);
        }
    }
}
