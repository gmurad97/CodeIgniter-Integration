<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Navbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Google Map &RightArrow; Edit</h6>
        <a onclick="return confirm('Do you really want to remove the google map?');" href="<?php echo base_url('gmap_delete'); ?>" class="btn btn-danger btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-trash"></i>
            </span>
            <span class="text">Delete</span>
        </a>
    </div>
    <div class="card-body">
        <form action="<?= base_url('gmap_edit_action'); ?>" method="POST" enctype="application/x-www-form-urlencoded">
            <h3 class="bg-gradient-warning text-center text-white py-2 rounded"><b>Google Map</b></h3>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="gmap_iframe_code"></label>
                        <textarea name="input_gmap_iframe_code" id="gmap_iframe_code" rows="6" class="form-control"><?= $g_iframe_data["g_iframe"]; ?></textarea>
                    </div>
                    <div id="gmap-container" class="mb-2">
                        <?= $g_iframe_data["g_iframe"]; ?>
                    </div>
                    <script>
                        document.querySelector("#gmap_iframe_code").addEventListener("input", function() {
                            document.querySelector("#gmap-container").innerHTML = document.querySelector("#gmap_iframe_code").value;
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