<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Navbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Footer &RightArrow; Edit</h6>
        <a onclick="return confirm('Do you really want to remove the footer?');" href="<?php echo base_url('footer_delete'); ?>" class="btn btn-danger btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-trash"></i>
            </span>
            <span class="text">Delete</span>
        </a>
    </div>
    <div class="card-body">
        <form action="<?php echo base_url('footer_edit_action'); ?>" method="POST" enctype="application/x-www-form-urlencoded">
            <h3 class="bg-gradient-warning text-center text-white mb-3 py-2 rounded"><b>Footer</b></h3>
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="bg-gradient-warning text-center text-white mb-3 py-2"><b>Information</b></h3>
                    <div class="form-group">
                        <label for="f_location"><b>Location</b></label>
                        <input value="<?= $footer_editable_data['f_location_text']; ?>" type="text" name="input_f_location" id="f_location" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="f_phone"><b>Phone</b></label>
                        <input value="<?= $footer_editable_data['f_phone_text']; ?>" type="text" name="input_f_phone" id="f_phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="f_email"><b>Email</b></label>
                        <input value="<?= $footer_editable_data['f_email_text']; ?>" type="text" name="input_f_email" id="f_email" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <h3 class="bg-gradient-warning text-center text-white mb-3 py-2"><b>Social Network</b></h3>
                    <div class="form-group">
                        <label for="f_twitter"><b>Twitter</b></label>
                        <input value="<?= $footer_editable_data['f_twitter_link']; ?>" type="text" name="input_f_twitter" id="f_twitter" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="f_facebook"><b>Facebook</b></label>
                        <input value="<?= $footer_editable_data['f_facebook_link']; ?>" type="text" name="input_f_facebook" id="f_facebook" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="f_youtube"><b>Youtube</b></label>
                        <input value="<?= $footer_editable_data['f_youtube_link']; ?>" type="text" name="input_f_youtube" id="f_youtube" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="f_instagram"><b>Instagram</b></label>
                        <input value="<?= $footer_editable_data['f_instagram_link']; ?>" type="text" name="input_f_instagram" id="f_instagram" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="bg-gradient-warning text-center text-white mb-3 py-2"><b>Other Data</b></h3>
                    <div class="form-group">
                        <label for="f_copyright"><b>Copyright</b></label>
                        <input value="<?= $footer_editable_data['f_copyright']; ?>" type="text" name="input_f_copyright" id="f_copyright" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary" id="copyright-f_copyright">&copy;</button>
                        <button type="button" class="btn btn-danger" id="copyright-f_clear">Clear</button>
                    </div>
                    <script>
                        document.querySelector("#copyright-f_copyright").addEventListener("click", function() {
                            document.querySelector("#f_copyright").value += "©";
                        });
                        document.querySelector("#copyright-f_clear").addEventListener("click", function() {
                            document.querySelector("#f_copyright").value = null;
                        });
                    </script>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-warning"><b>Edit</b></button>
        </form>
    </div>
</div>

<?php $this->load->view("admin/includes/Footer"); ?>
<?php $this->load->view("admin/includes/FooterScripts"); ?>