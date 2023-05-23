<?php

class AdminController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("AdminModel");
    }

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
        $data["get_all_data"] = $this->AdminModel->staff_db_get_all(true);
        $this->load->view("admins/staff/list", $data);
    }

    public function create()
    {
        $this->load->view("admins/staff/create");
    }

    public function create_act()
    {
        /*GET INPUT POST ELEMENTS*/
        $firstName         = $_POST["first_name"];
        $lastName          = $_POST["last_name"];
        $position          = $_POST["position"];
        $email             = $_POST["email"];
        $description       = $_POST["description"];
        $experience        = $_POST["experience"];
        $mobile            = $_POST["mobile"];
        $whatsapp          = $_POST["whatsapp"];
        $facebook          = $_POST["facebook"];
        $instagram         = $_POST["instagram"];
        $telegram          = $_POST["telegram"];
        $youtube           = $_POST["youtube"];
        $acc_status        = $_POST["acc_status"];
        $created_timestamp = time();

        /*SETTING FILE UPLOADS*/
        $files_feature_configs["upload_path"] = "./uploads"; //File upload path -> Dir...
        $files_feature_configs["allowed_types"] = "gif|jpg|jpeg|png|PNG|JPG|JPEG|GIF"; //Allowed upload types
        $files_feature_configs["encrypt_name"] = true; //myimage.jpg -> a6a5e76984ac38726b09f825c31374c7.jpg
        $files_feature_configs["remove_spaces"] = true; //MY TEST IMAGE.jpg -> MYTESTIMAGE.jpg or MY_TEST_IMAGE.jpg
        $files_feature_configs["file_ext_tolower"] = true; //PNG -> png || JPG -> jpg
        $this->load->library("upload", $files_feature_configs); // Loading config & initialize

        if ($this->upload->do_upload("acc_photo")) { //acc_photo = input[name=acc_photo ; type="file"]
            $uploaded_acc_photo = $this->upload->data();
            $db_collection = [
                "firstName"     => $firstName,
                "lastName"      => $lastName,
                "position"      => $position,
                "email"         => $email,
                "description"   => $description,
                "experience"    => $experience,
                "mobile"        => $mobile,
                "whatsapp"      => $whatsapp,
                "facebook"      => $facebook,
                "instagram"     => $instagram,
                "telegram"      => $telegram,
                "youtube"       => $youtube,
                "acc_status"    => $acc_status,
                "created_date"  => $created_timestamp,
                "user_img"      => $uploaded_acc_photo["file_name"]
            ];
            $this->AdminModel->staff_db_insert($db_collection);
            redirect(base_url("adm_list"));
        } else {
            $db_collection = [
                "firstName" => $firstName,
                "lastName" => $lastName,
                "position" => $position,
                "email" => $email,
                "description" => $description,
                "experience" => $experience,
                "mobile" => $mobile,
                "whatsapp" => $whatsapp,
                "facebook" => $facebook,
                "instagram" => $instagram,
                "telegram" => $telegram,
                "youtube" => $youtube,
                "acc_status" => $acc_status,
                "created_date" => $created_timestamp
            ];
            $this->AdminModel->staff_db_insert($db_collection);
            redirect(base_url("adm_list"));
        }
    }

    public function viewDetail($id)
    {
        $data["detail"] = $this->AdminModel->staff_db_get_id($id);
        $this->load->view("admins/staff/detail", $data);
    }

    public function delStaff($id)
    {
        $this->AdminModel->staff_db_del_id($id);
        redirect(base_url("adm_list"));
    }
}
