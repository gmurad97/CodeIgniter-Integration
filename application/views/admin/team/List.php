<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Navbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Team &RightArrow; List</h6>
        <a href="<?php echo base_url('team_create'); ?>" class="btn btn-success btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Create/Add</span>
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive table-striped table-hover">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Position</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Control</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $count_uid = 0;
                    foreach ($get_db_team_list as $get_db_team_key) {
                        $count_uid++; ?>
                        <tr>
                            <td><?php echo $count_uid; ?></td>
                            <td><?php echo $get_db_team_key["t_firstname"]; ?></td>
                            <td><?php echo $get_db_team_key["t_lastname"]; ?></td>
                            <td><?php echo $get_db_team_key["t_position"]; ?></td>
                            <td><?php echo $get_db_team_key["t_status"]; ?></td>
                            <td>
                                <?php if ($get_db_team_key['t_img']) { ?>
                                    <img width="80" height="80" style="object-fit:cover;" class="rounded" src="<?php echo base_url('file_manager/team_profile_img/') . $get_db_team_key["t_img"]; ?>" alt="">
                                <?php } else { ?>
                                    <img width="80" height="80" style="object-fit:cover;" class="rounded" src="https://img.freepik.com/premium-vector/error-404-found-glitch-effect_8024-4.jpg?w=826" alt="">
                                <?php } ?>
                            </td>
                            <td width="154">
                                <a href="<?php echo base_url('team_detail_view/') . $get_db_team_key['t_uid']; ?>" style="text-decoration:none;">
                                    <button type="button" class="btn btn-primary btn-circle">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </a>
                                <a href="<?php echo base_url('team_edit/') . $get_db_team_key['t_uid']; ?>" style="text-decoration:none;">
                                    <button type="button" class="btn btn-warning btn-circle">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                </a>
                                <a onclick="return confirm('Are you sure you want to delete the user -> <?php echo $get_db_team_key['t_firstname'] . ' ' . $get_db_team_key['t_lastname']; ?>');" href="<?php echo base_url('team_delete/') . $get_db_team_key['t_uid']; ?>" style="text-decoration:none;">
                                    <button type="button" class="btn btn-danger btn-circle">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $this->load->view("admin/includes/Footer"); ?>
<?php $this->load->view("admin/includes/FooterScripts"); ?>