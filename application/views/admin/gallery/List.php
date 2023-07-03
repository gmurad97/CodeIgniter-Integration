<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Navbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Gallery &RightArrow; List</h6>
        <a href="<?= base_url('gallery_create'); ?>" class="btn btn-success btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
            <span class="text">Create/Add</span>
        </a>
    </div>
    <div class="card-body">
        <h3 class="bg-gradient-dark text-center text-white mb-3 py-2 rounded"><b>Gallery List</b></h3>
        <div class="row">
            <?php foreach ($gallery_get_db as $gallery_get_db_item) { ?>
                <div class="col-sm-3">
                    <div class="card mb-3">
                        <div class="card-body p-2"><img style="object-fit: contain;" class="rounded" width="100%" height="200px" src="<?= base_url('file_manager/gallery/') . $gallery_get_db_item['g_img']; ?>" alt=""></div>
                        <div class="card-footer p-2">
                            <div class="btn-group btn-block">
                                <a onclick="return confirm('Are you sure you want to delete the image?');" href="<?= base_url('gallery_delete/') . $gallery_get_db_item["g_id"]; ?>" style="text-decoration:none;width:100%;">
                                    <button type="button" class="btn btn-danger btn-block">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php $this->load->view("admin/includes/Footer"); ?>
<?php $this->load->view("admin/includes/FooterScripts"); ?>