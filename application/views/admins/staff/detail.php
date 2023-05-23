<?php $this->load->view("admins/includes/HeaderScripts"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/EarnCard"); ?>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <div class="text-center mb-5">
                <h1><?php echo $detail["firstName"] . " " . $detail["lastName"]; ?></h1>
                <img width="256px" src="<?php echo base_url("uploads/") . $detail["user_img"]; ?>" alt="">
            </div>
            <table class="table table-striped table-dark table-hover" id="dataTable" width="100%" cellspacing="0">
                <tr>
                    <td width="512">Position</td>
                    <td><?php echo $detail["position"]; ?></td>
                </tr>
                <tr>
                    <td>Experience</td>
                    <td><?php echo $detail["experience"]; ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?php echo $detail["email"]; ?></td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td><?php echo $detail["description"]; ?></td>
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><?php echo $detail["mobile"]; ?></td>
                </tr>
                <tr>
                    <td>WhatsApp</td>
                    <td><?php echo $detail["whatsapp"]; ?></td>
                </tr>
                <tr>
                    <td>FaceBook</td>
                    <td><?php echo $detail["facebook"]; ?></td>
                </tr>
                <tr>
                    <td>Instagram</td>
                    <td><?php echo $detail["instagram"]; ?></td>
                </tr>
                <tr>
                    <td>Youtube</td>
                    <td><?php echo $detail["youtube"]; ?></td>
                </tr>
                <tr>
                    <td>Telegram</td>
                    <td><?php echo $detail["telegram"]; ?></td>
                </tr>
                <tr>
                    <td>Account Status</td>
                    <td>
                        <?php if ($detail["acc_status"] == "enabled") { ?>
                            <span class="p-2" style="background-color:aliceblue;color:green;font-weight:bold;">Enabled</span>
                        <?php } else { ?>
                            <span class="p-2" style="background-color:aliceblue;color:red;font-weight:bold;">Disabled</span>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>Created Date</td>
                    <td><?php echo $detail["created_date"]; ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<?php $this->load->view("admins/includes/Footer"); ?>
<?php $this->load->view("admins/includes/FooterScripts"); ?>