<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Navbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary"> Team &RightArrow; Edit &RightArrow; <?php echo $get_db_team_row["t_firstname"] . " " . $get_db_team_row["t_lastname"]; ?></h6>
        <a href="<?php echo base_url('team_list'); ?>" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Back to list</span>
        </a>
    </div>
    <div class="card-body">
        <?php if ($this->session->flashdata("so_validate_error")) { ?>
            <style>
                .bg-error-message {
                    background-color: rgba(255, 0, 0, 0.16);
                }
            </style>
            <h1 class="bg-error-message h6 text-center rounded p-3 mt-4"><?php echo $this->session->flashdata("so_validate_error"); ?></h1>
        <?php } ?>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <a target="_blank" href="<?php echo base_url('file_manager/team_profile_img/') . $get_db_team_row["t_img"]; ?>">
                <?php if ($get_db_team_row['t_img']) { ?>
                    <img src="<?php echo base_url('file_manager/team_profile_img/') . $get_db_team_row["t_img"]; ?>" alt="" width="256" height="256" class="rounded-circle mb-5 mx-auto d-block" style="box-shadow: 0px 0px 6px #000000;object-fit:cover;">
                <?php } else { ?>
                    <img src="https://img.freepik.com/premium-vector/error-404-found-glitch-effect_8024-4.jpg?w=826" alt="" width="256" height="256" class="rounded-circle mb-5 mx-auto d-block" style="box-shadow: 0px 0px 6px #000000;object-fit:cover;">
                <?php } ?>
            </a>
        </div>
        <form action="<?php echo base_url('team_edit_action/') . $get_db_team_row["t_uid"]; ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
            <h3 class="bg-gradient-warning text-center text-white mb-3 py-2 rounded"><b>Personal Information</b></h3>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="firstname"><b>First Name</b></label>
                        <input name="input_first_name" type="text" id="firstname" class="form-control" placeholder="Enter First Name..." value="<?php echo $get_db_team_row["t_firstname"]; ?>">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="lastname"><b>Last Name</b></label>
                        <input name="input_last_name" type="text" id="lastname" class="form-control" placeholder="Enter Last Name..." value="<?php echo $get_db_team_row["t_lastname"]; ?>">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="email"><b>Email</b></label>
                        <input name="input_email" type="email" id="email" class="form-control" placeholder="Enter Email..." value="<?php echo $get_db_team_row["t_email"]; ?>">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                    <label for="description"><b>Description</b></label>
                    <textarea name="input_description" id="description" cols="30" rows="5" class="form-control"><?php echo $get_db_team_row["t_description"]; ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="position"><b>Position</b></label>
                        <select name="input_position" id="position" class="form-control">
                            <?php foreach ($t_position_select_option as $t_position_select_option_key => $t_position_select_option_value) { ?>
                                <option <?php if ($get_db_team_row["t_position"] == "$t_position_select_option_value") { ?> selected <?php } ?> value="<?php echo $t_position_select_option_value; ?>"><?php echo $t_position_select_option_key; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="mobile"><b>Mobile</b></label>
                        <input name="input_mobile" type="text" id="mobile" class="form-control" placeholder="Enter Mobile..." value="<?php echo $get_db_team_row["t_mobile"]; ?>">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="whatsapp"><b>WhatsApp</b></label>
                        <input name="input_whatsapp" type="text" id="whatsapp" class="form-control" placeholder="Enter WhatsApp..." value="<?php echo $get_db_team_row["t_whatsapp"]; ?>">
                    </div>
                </div>
            </div>
            <h3 class="bg-gradient-warning text-center text-white mt-3 mb-3 py-2 rounded"><b>Social Information</b></h3>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="facebook"><b>Facebook</b></label>
                        <input name="input_facebook" type="text" id="facebook" class="form-control" placeholder="Enter Facebook URL..." value="<?php echo $get_db_team_row["t_facebook"]; ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="instagram"><b>Instagram</b></label>
                        <input name="input_instagram" type="text" id="instagram" class="form-control" placeholder="Enter Instagram URL..." value="<?php echo $get_db_team_row["t_instagram"]; ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="telegram"><b>Telegram</b></label>
                        <input name="input_telegram" type="text" id="telegram" class="form-control" placeholder="Enter Telegram URL..." value="<?php echo $get_db_team_row["t_telegram"]; ?>">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="youtube"><b>Youtube</b></label>
                        <input name="input_youtube" type="text" id="youtube" class="form-control" placeholder="Enter Youtube URL..." value="<?php echo $get_db_team_row["t_youtube"]; ?>">
                    </div>
                </div>
            </div>
            <h3 class="bg-gradient-warning text-center text-white mt-3 mb-3 py-2 rounded"><b>Extra Information</b></h3>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="experience"><b>Experience</b></label>
                        <input name="input_experience" type="number" id="experience" class="form-control" min="0" max="9999" value="<?php echo $get_db_team_row["t_experience"]; ?>">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="status"><b>Account Status</b></label>
                        <select name="input_status" id="status" class="form-control">
                            <?php foreach ($t_status_select_option as $t_status_select_option_key => $t_status_select_option_value) { ?>
                                <option <?php if ($get_db_team_row["t_status"] == "$t_status_select_option_value") { ?> selected <?php } ?> value="<?php echo $t_status_select_option_value; ?>"><?php echo $t_status_select_option_key; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="img"><b>Account Photo</b></label>
                        <input name="input_img" type="file" id="img" class="form-control p-1">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-warning"><b>Edit Account</b></button>
        </form>
    </div>
</div>

<?php $this->load->view("admin/includes/Footer"); ?>
<?php $this->load->view("admin/includes/FooterScripts"); ?>