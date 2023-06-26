<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Navbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Testimonial &RightArrow; List</h6>
        <a href="<?php echo base_url('testimonial_create'); ?>" class="btn btn-success btn-icon-split">
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
                        <th>First name</th>
                        <th>Profession</th>
                        <th>Feedback</th>
                        <th>Img</th>
                        <th>Control</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $testimonialCount = 0;
                    foreach ($testimonial_get_all as $testimonial_get_all_key) {
                        $testimonialCount++;
                    ?>
                        <tr>
                            <td><?php echo $testimonialCount; ?></td>
                            <td><?php echo $testimonial_get_all_key["t_firstname"]; ?></td>
                            <td><?php echo $testimonial_get_all_key["t_profession"]; ?></td>
                            <td><?php echo $testimonial_get_all_key["t_feedback"]; ?></td>
                            <?php if ($testimonial_get_all_key["t_img"]) { ?>
                                <td><img width="80" height="80" style="object-fit:cover;" class="rounded" src="<?php echo base_url('file_manager/testimonial/') . $testimonial_get_all_key["t_img"]; ?>" alt=""></td>
                            <?php } else { ?>
                                <td><img width="80" height="80" style="object-fit:cover;" class="rounded" src="https://img.freepik.com/premium-vector/error-404-found-glitch-effect_8024-4.jpg?w=826" alt=""></td>
                            <?php } ?>
                            <td width="154">
                                <a style="text-decoration:none;">
                                    <button disabled type="button" class="btn btn-primary btn-circle">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </a>
                                <a href="<?php echo base_url('testimonial_edit/') . $testimonial_get_all_key["t_id"]; ?>" style="text-decoration:none;">
                                    <button type="button" class="btn btn-warning btn-circle">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                </a>
                                <a onclick="return confirm('Are you sure you want to delete the testimonial? <?php echo $testimonial_get_all_key["t_firstname"]; ?>'); " href="<?php echo base_url('testimonial_delete/') . $testimonial_get_all_key["t_id"]; ?>" style="text-decoration:none;">
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