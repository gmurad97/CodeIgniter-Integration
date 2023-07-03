<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Navbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Logo &RightArrow; Edit</h6>
        <a onclick="return confirm('Do you really want to remove the logo?');" href="<?php echo base_url('logo_delete'); ?>" class="btn btn-danger btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-trash"></i>
            </span>
            <span class="text">Delete</span>
        </a>
    </div>
    <div class="card-body">
        <form action="<?php echo base_url('logo_edit_action'); ?>" method="POST" enctype="multipart/form-data">
            <h3 class="bg-gradient-warning text-center text-white mb-3 py-2 rounded"><b>Logo</b></h3>
            <?php if ($this->session->flashdata("adm_logo_img_error")) { ?>
                <style>
                    .bg-error-message {
                        background-color: rgba(255, 0, 0, 0.16);
                    }
                </style>
                <h1 class="bg-error-message h6 text-center rounded p-3 mt-4"><?php echo $this->session->flashdata("adm_logo_img_error"); ?></h1>
            <?php } ?>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="logo_img"><b>Logo</b> &RightArrow; <span class="text-danger font-weight-bold">Allowed types: (JPG; JPEG; PNG; SVG)</span></label>
                        <input type="file" name="input_logo_img" id="logo_img" class="form-control m-0 p-1">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group d-flex flex-row justify-content-center align-items-center">
                        <img width="80" height="80" style="object-fit: cover;" src="<?php echo base_url('file_manager/logo/') . $logo_db["logo_img"]; ?>" alt="">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-warning"><b>Edit</b></button>
        </form>
    </div>
</div>

<?php $this->load->view("admin/includes/Footer"); ?>
<?php $this->load->view("admin/includes/FooterScripts"); ?>