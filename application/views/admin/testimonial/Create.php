<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Navbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Testimonial &RightArrow; Create</h6>
        <a href="<?php echo base_url('testimonial_list'); ?>" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Go to list</span>
        </a>
    </div>
    <div class="card-body">
        <form action="<?php echo base_url('testimonial_create_action'); ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
            <h3 class="bg-gradient-dark text-center text-white mb-3 py-2 rounded"><b>Testimonial</b></h3>
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="t_firstname"><b>Firstname</b></label>
                                <input type="text" name="input_t_firstname" id="t_firstname" class="form-control">
                            </div>
                            <div class="col-sm-6">
                                <label for="t_profession"><b>Profession</b></label>
                                <input type="text" name="input_t_profession" id="t_profession" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="t_feedback"><b>Feedback</b></label>
                        <textarea name="input_t_feedback" id="t_feedback" rows="3" class="form-control"></textarea>
                    </div>
                </div>
                <div class="col-sm-4">
                    <style>
                        .file_upload_block {
                            width: 100%;
                            height: 400px;
                            display: flex;
                            flex-direction: column;
                            justify-content: center;
                            align-items: center;
                            border: 1px solid #B2BEB5;
                            border-radius: 6px;
                            font-size: 64px;
                            transition: background-color 128ms linear, color 128ms linear;
                            background-size: cover;
                            background-repeat: no-repeat;
                            background-position: center center;
                            color: #2d3436;
                            cursor: pointer;
                        }

                        .file_upload_block:hover {
                            background-color: rgba(178, 190, 181, 0.3);
                        }
                    </style>
                    <div class="form-group">
                        <label for="t_img"><b>Image Upload</b></label>
                        <input type="file" name="input_t_img" id="t_img" hidden>
                        <div class="file_upload_block">
                            <i class="fas fa-plus-circle fas-js"></i>
                        </div>
                    </div>
                    <script>
                        document.querySelector("#t_img").addEventListener("change", function() {
                            document.querySelector(".fas-js").classList.replace("fa-plus-circle", "fa-pen");
                            document.querySelector(".file_upload_block").style.backgroundImage = `url("${URL.createObjectURL(document.querySelector("#t_img").files[0])}")`;
                            document.querySelector(".file_upload_block").style.color = "#ffffff";
                        });
                        document.querySelector(".file_upload_block").addEventListener("click", function() {
                            document.querySelector("#t_img").click();
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