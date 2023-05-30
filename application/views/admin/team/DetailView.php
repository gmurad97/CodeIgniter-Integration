<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Navbar"); ?>


<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Team &RightArrow; Detail View &RightArrow; <?php echo $get_db_team_row["t_firstname"] . " " . $get_db_team_row["t_lastname"]; ?></h6>
        <a href="<?php echo base_url('team_list'); ?>" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Back to list</span>
        </a>
    </div>

    <div class="card-body">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
            <a target="_blank" href="<?php echo base_url('file_manager/team_profile_img/') . $get_db_team_row["t_img"]; ?>">
                <?php if ($get_db_team_row['t_img']) { ?>
                    <img src="<?php echo base_url('file_manager/team_profile_img/') . $get_db_team_row["t_img"]; ?>" alt="" width="256" height="256" class="rounded-circle mb-5 mx-auto d-block" style="box-shadow: 0px 0px 6px #000000;object-fit:cover;">
                <?php } else { ?>
                    <img src="https://img.freepik.com/premium-vector/error-404-found-glitch-effect_8024-4.jpg?w=826" alt="" width="256" height="256" class="rounded-circle mb-5 mx-auto d-block" style="box-shadow: 0px 0px 6px #000000;object-fit:cover;">
                <?php } ?>
            </a>
        </div>
        <div class="table-responsive table-hover">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <tr style="width:300px;">
                    <td style="width:50%">First Name</td>
                    <td style="width:50%"><?php echo $get_db_team_row["t_firstname"] ?></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><?php echo $get_db_team_row["t_lastname"]; ?></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><?php echo $get_db_team_row["t_description"]; ?></td>
                </tr>
                <tr>
                    <td>Position</td>
                    <td><?php echo $get_db_team_row["t_position"]; ?></td>
                </tr>
                <tr>
                    <td>Experience</td>
                    <td><?php echo $get_db_team_row["t_experience"]; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo $get_db_team_row["t_email"]; ?></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><?php echo $get_db_team_row["t_mobile"]; ?></td>
                </tr>
                <tr>
                    <td>Whatsapp</td>
                    <td><?php echo $get_db_team_row["t_whatsapp"]; ?></td>
                </tr>
                <tr>
                    <td>Facebook</td>
                    <td><?php echo $get_db_team_row["t_facebook"]; ?></td>
                </tr>
                <tr>
                    <td>Instagram</td>
                    <td><?php echo $get_db_team_row["t_instagram"]; ?></td>
                </tr>
                <tr>
                    <td>Telegram</td>
                    <td><?php echo $get_db_team_row["t_telegram"]; ?></td>
                </tr>
                <tr>
                    <td>Youtube</td>
                    <td><?php echo $get_db_team_row["t_youtube"]; ?></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <?php if ($get_db_team_row["t_status"] == "active") { ?>
                            <span class="h6 bg-success text-white p-2">Active</span>
                        <?php } else if ($get_db_team_row["t_status"] == "deactive") { ?>
                            <span class="h6 bg-danger text-white p-2">Deactive</span>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>Created Date</td>
                    <td><?php echo $get_db_team_row["t_created_date"] ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?php $this->load->view("admin/includes/Footer"); ?>
<?php $this->load->view("admin/includes/FooterScripts"); ?>