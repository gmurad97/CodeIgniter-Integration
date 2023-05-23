<?php $this->load->view("admins/includes/HeaderScripts"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/EarnCard"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">STAFF LIST</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Position</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Control</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $realStaffCounter = 0;
                    foreach ($get_all_data as $get_all_data_element) {
                        $realStaffCounter++;
                    ?>
                        <tr>
                            <td><?php echo $realStaffCounter; ?></td>
                            <td><?php echo $get_all_data_element["firstName"] . " " . $get_all_data_element["lastName"]; ?></td>
                            <td><?php echo $get_all_data_element["position"]; ?></td>
                            <td><?php echo $get_all_data_element["email"]; ?></td>
                            <td><?php echo $get_all_data_element["mobile"]; ?></td>
                            <td>
                                <?php if ($get_all_data_element["acc_status"] == "enabled") { ?>
                                    <p class="p-2" style="background:green;color:white;">Enabled</p>
                                <?php } else { ?>
                                    <p class="p-2" style="background:red;color:white;">Disabled</p>
                                <?php } ?>
                            </td>
                            <td>
                                <?php if (!empty($get_all_data_element["user_img"])) { ?>
                                    <img width="64" src="<?php echo base_url("uploads/") . $get_all_data_element["user_img"]; ?>" alt="">
                                <?php } else { ?>
                                    <img width="64" src="https://img.freepik.com/premium-vector/error-404-found-glitch-effect_8024-4.jpg?w=826" alt="">
                                <?php } ?>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <a href="<?php echo base_url("adm_details/") . $get_all_data_element["uid"]; ?>" class="mr-1">
                                        <button title="View" class="btn btn-primary" type="button"><i class="fas fa-fw fa-eye"></i></button>
                                    </a>
                                    <a href="#" class="mr-1">
                                        <button title="Edit" class="btn btn-warning" type="button"><i class="fas fa-fw fa-pen"></i></button>
                                    </a>
                                    <a onclick="return confirm('Are you sure???О.о')" href="<?php echo base_url("adm_deleteStaff/") . $get_all_data_element["uid"]; ?>">
                                        <button title="Delete" class="btn btn-danger" type="button"><i class="fas fa-fw fa-trash"></i></button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $this->load->view("admins/includes/Footer"); ?>
<?php $this->load->view("admins/includes/FooterScripts"); ?>