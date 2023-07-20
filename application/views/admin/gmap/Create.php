<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Navbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Google Map &RightArrow; Create</h6>
    </div>
    <div class="card-body">
        <form action="<?= base_url('gmap_create_action'); ?>" method="POST" enctype="application/x-www-form-urlencoded">
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
            <h3 class="bg-gradient-dark text-center text-white py-2 rounded"><b>Google Map</b></h3>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="gmap_iframe_code"></label>
                        <textarea name="input_gmap_iframe_code" id="gmap_iframe_code" rows="6" class="form-control"></textarea>
                    </div>
                    <div id="gmap-container" class="mb-2">

                    </div>
                    <script>
                        document.querySelector("#gmap_iframe_code").addEventListener("input", function() {
                            document.querySelector("#gmap-container").innerHTML = document.querySelector("#gmap_iframe_code").value;
                        });
                    </script>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-success"><b>Create / Add</b></button>
        </form>
    </div>
</div>

<?php $this->load->view("admin/includes/Footer"); ?>
<?php $this->load->view("admin/includes/FooterScripts"); ?>