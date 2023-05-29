<?php

class AdminController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("AdminModel");
    }

    public function xlb_admin_login()
    {
        $this->load->view("admin/Login");
    }

    public function xlb_admin_login_action()
    {
        $input_admin_username = $_POST["input_admin_username"];
        $input_admin_password = $_POST["input_admin_password"];
        if (!empty($input_admin_username) && !empty($input_admin_password)) {
            $data = [
                "a_username" => $input_admin_username,
                "a_password" => hash("SHA256", hash("MD5", $input_admin_password))
            ];
            $admin_db_row = $this->AdminModel->admin_get_db_row($data);
            if ($admin_db_row) {
                $this->session->set_userdata("adm_firstname", $admin_db_row["a_firstname"]);
                $this->session->set_userdata("adm_lastname", $admin_db_row["a_lastname"]);
                $this->session->set_userdata("adm_img", $admin_db_row["a_img"]);
                redirect(base_url('dashboard'));
            } else {
                $this->session->set_flashdata("adm_auth_error", "Error! Wrong \"Username\" or \"Password\"");
                redirect($_SERVER["HTTP_REFERER"]);
            }
        } else {
            $this->session->set_flashdata("adm_auth_error", "Error! Empty \"Username\" or \"Password\"");
            redirect($_SERVER["HTTP_REFERER"]);
        }
    }

    public function xlb_admin_logout()
    {
        $this->session->unset_userdata("adm_firstname");
        $this->session->unset_userdata("adm_lastname");
        $this->session->unset_userdata("adm_img");
        $this->session->set_flashdata("adm_logout_success", "The session ended successfully!");
        redirect(base_url('admin_auth'));
    }

    public function xlb_admin_dashboard()
    {
        $this->load->view("admin/Dashboard");
    }

    public function xlb_admin_team_list()
    {
        $data["get_db_team_list"] = $this->AdminModel->team_get_db(true);
        $this->load->view("admin/team/List", $data);
    }

    public function xlb_admin_team_create()
    {
        $this->load->view("admin/team/Create");
    }

    public function xlb_admin_team_create_action()
    {
        $input_firstName        = $_POST["input_first_name"];
        $input_lastName         = $_POST["input_last_name"];
        $input_email            = $_POST["input_email"];
        $input_description      = $_POST["input_description"];
        $input_position         = $_POST["input_position"];
        $input_mobile           = $_POST["input_mobile"];
        $input_whatsapp         = $_POST["input_whatsapp"];
        $input_facebook         = $_POST["input_facebook"];
        $input_instagram        = $_POST["input_instagram"];
        $input_telegram         = $_POST["input_telegram"];
        $input_youtube          = $_POST["input_youtube"];
        $input_experience       = $_POST["input_experience"];
        $input_status           = $_POST["input_status"];
        $input_created_date     = date("Y-m-d // H:i:s");

        $file_custom_config["upload_path"]          = "./file_manager/team_profile_img";
        $file_custom_config["allowed_types"]        = "jpg|jpeg|png|JPG|JPEG|PNG";
        $file_custom_config["file_ext_tolower"]     = true;
        $file_custom_config["remove_spaces"]        = true;
        $file_custom_config["encrypt_name"]         = true;
        $this->load->library("upload", $file_custom_config);

        if ($this->upload->do_upload("input_img")) {
            $input_file_array = $this->upload->data();
            $data = [
                "t_firstname"       => $input_firstName,
                "t_lastname"        => $input_lastName,
                "t_description"     => $input_description,
                "t_position"        => $input_position,
                "t_experience"      => $input_experience,
                "t_email"           => $input_email,
                "t_mobile"          => $input_mobile,
                "t_whatsapp"        => $input_whatsapp,
                "t_facebook"        => $input_facebook,
                "t_instagram"       => $input_instagram,
                "t_telegram"        => $input_telegram,
                "t_youtube"         => $input_youtube,
                "t_status"          => $input_status,
                "t_img"             => $input_file_array["file_name"],
                "t_created_date"    => $input_created_date
            ];
            $this->AdminModel->team_insert_db($data);
            redirect(base_url("team_list"));
        } else {
            $data = [
                "t_firstname"       => $input_firstName,
                "t_lastname"        => $input_lastName,
                "t_description"     => $input_description,
                "t_position"        => $input_position,
                "t_experience"      => $input_experience,
                "t_email"           => $input_email,
                "t_mobile"          => $input_mobile,
                "t_whatsapp"        => $input_whatsapp,
                "t_facebook"        => $input_facebook,
                "t_instagram"       => $input_instagram,
                "t_telegram"        => $input_telegram,
                "t_youtube"         => $input_youtube,
                "t_status"          => $input_status,
                "t_created_date"    => $input_created_date
            ];
            $this->AdminModel->team_insert_db($data);
            redirect(base_url("team_list"));
        }
    }

    public function xlb_admin_team_detail_view($t_uid)
    {
        $data["get_db_team_row"] = $this->AdminModel->team_get_db_row($t_uid);
        $this->load->view("admin/team/DetailView", $data);
    }

    public function xlb_admin_team_delete($t_uid)
    {
        $this->AdminModel->team_delete_db_row($t_uid);
        redirect(base_url("team_list"));
    }

    public function xlb_admin_team_edit($t_uid)
    {
        $data["get_db_team_row"] = $this->AdminModel->team_get_db_row($t_uid);
        $this->load->view("admin/team/Edit", $data);
    }

    public function xlb_admin_team_edit_action($t_uid)
    {
        $input_firstName        = $_POST["input_first_name"];
        $input_lastName         = $_POST["input_last_name"];
        $input_email            = $_POST["input_email"];
        $input_description      = $_POST["input_description"];
        $input_position         = $_POST["input_position"];
        $input_mobile           = $_POST["input_mobile"];
        $input_whatsapp         = $_POST["input_whatsapp"];
        $input_facebook         = $_POST["input_facebook"];
        $input_instagram        = $_POST["input_instagram"];
        $input_telegram         = $_POST["input_telegram"];
        $input_youtube          = $_POST["input_youtube"];
        $input_experience       = $_POST["input_experience"];
        $input_status           = $_POST["input_status"];
        $input_created_date     = date("Y-m-d // H:i:s");

        $file_custom_config["upload_path"]          = "./file_manager/team_profile_img";
        $file_custom_config["allowed_types"]        = "jpg|jpeg|png|JPG|JPEG|PNG";
        $file_custom_config["file_ext_tolower"]     = true;
        $file_custom_config["remove_spaces"]        = true;
        $file_custom_config["encrypt_name"]         = true;
        $this->load->library("upload", $file_custom_config);

        if ($this->upload->do_upload("input_img")) {
            $input_file_array = $this->upload->data();
            $data = [
                "t_firstname"       => $input_firstName,
                "t_lastname"        => $input_lastName,
                "t_description"     => $input_description,
                "t_position"        => $input_position,
                "t_experience"      => $input_experience,
                "t_email"           => $input_email,
                "t_mobile"          => $input_mobile,
                "t_whatsapp"        => $input_whatsapp,
                "t_facebook"        => $input_facebook,
                "t_instagram"       => $input_instagram,
                "t_telegram"        => $input_telegram,
                "t_youtube"         => $input_youtube,
                "t_status"          => $input_status,
                "t_img"             => $input_file_array["file_name"],
                "t_created_date"    => $input_created_date
            ];

            $this->AdminModel->team_edit_db_row($t_uid, $data);
            redirect(base_url("team_list"));
        } else {
            $data = [
                "t_firstname"       => $input_firstName,
                "t_lastname"        => $input_lastName,
                "t_description"     => $input_description,
                "t_position"        => $input_position,
                "t_experience"      => $input_experience,
                "t_email"           => $input_email,
                "t_mobile"          => $input_mobile,
                "t_whatsapp"        => $input_whatsapp,
                "t_facebook"        => $input_facebook,
                "t_instagram"       => $input_instagram,
                "t_telegram"        => $input_telegram,
                "t_youtube"         => $input_youtube,
                "t_status"          => $input_status,
                "t_created_date"    => $input_created_date
            ];
            $this->AdminModel->team_edit_db_row($t_uid, $data);
            redirect(base_url("team_list"));
        }
    }
}
