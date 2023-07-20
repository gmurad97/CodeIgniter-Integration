<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Navbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Logo &RightArrow; Create</h6>
    </div>
    <div class="card-body">
        <form action="<?php echo base_url('logo_create_action'); ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
            <h3 class="bg-gradient-dark text-center text-white mb-3 py-2 rounded"><b>Logo</b></h3>
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
            </div>
            <button type="submit" class="btn btn-block btn-success"><b>Create / Add</b></button>
        </form>
    </div>
</div>

<?php $this->load->view("admin/includes/Footer"); ?>
<?php $this->load->view("admin/includes/FooterScripts"); ?>