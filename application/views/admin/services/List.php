<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Navbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Services &RightArrow; List</h6>
        <a href="<?php echo base_url('services_create'); ?>" class="btn btn-success btn-icon-split">
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
                        <th>Heading Text</th>
                        <th>Paragraph Text</th>
                        <th>Control</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $counterId = 0;
                    foreach ($services_get_db as $services_get_db_item) {
                        $counterId++; ?>
                        <tr>
                            <td><?php echo $counterId; ?></td>
                            <td><?php echo $services_get_db_item["s_h1_text"]; ?></td>
                            <td><?php echo $services_get_db_item["s_p_text"]; ?></td>
                            <td width="154">
                                <a style="text-decoration:none;">
                                    <button disabled type="button" class="btn btn-primary btn-circle">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </a>
                                <a href="<?php echo base_url('services_edit/') . $services_get_db_item["s_id"]; ?>" style="text-decoration:none;">
                                    <button type="button" class="btn btn-warning btn-circle">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                </a>
                                <a onclick="return confirm('Are you sure you want to delete the service?'); " href="<?php echo base_url('services_delete/') . $services_get_db_item["s_id"]; ?>" style="text-decoration:none;">
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