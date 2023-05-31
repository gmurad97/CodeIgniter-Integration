<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Navbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">About &RightArrow; Create </h6>
    </div>
    <?php if (empty($get_db_au_row)) { ?>
        <div class="card-body">
            <form action="<?php echo base_url('about_us_create_action'); ?>" method="POST" enctype="multipart/form-data">
                <h3 class="bg-gradient-dark text-center text-white mb-3 py-2 rounded"><b>About Us</b></h3>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="about_us_img"><b>Image</b></label>
                            <input name="input_au_img" type="file" id="about_us_img" class="form-control p-1">
                        </div>
                        <div class="form-group">
                            <label for="about_us_img_first_text"><b>First text</b></label>
                            <input name="input_au_img_first_text" type="text" placeholder="First text..." id="about_us_img_first_text" class="form-control p-1">
                        </div>
                        <div class="form-group">
                            <label for="about_us_img_second_text"><b>Second text</b></label>
                            <input name="input_au_img_second_text" type="text" placeholder="Second text..." id="about_us_img_second_text" class="form-control p-1">
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="about_us_desc_base_h1_text"><b>Description base H1 text</b></label>
                            <input name="input_au_desc_base_h1_text" type="text" id="about_us_desc_base_h1_text" class="form-control" placeholder="Enter description base H1 text...">
                        </div>
                        <div class="form-group">
                            <label for="about_us_desc_base_p_text"><b>Description base P text</b></label>
                            <input name="input_au_desc_base_p_text" type="text" id="about_us_desc_base_p_text" class="form-control" placeholder="Enter description base P text...">
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="about_desc_left_h1_text"><b>Description left H1 text</b></label>
                                    <input name="input_au_desc_left_h1_text" type="text" id="about_desc_left_h1_text" class="form-control" placeholder="Enter description left H1 text...">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="about_desc_left_p_text"><b>Description left P text</b></label>
                                    <input name="input_au_desc_left_p_text" type="text" id="about_desc_left_p_text" class="form-control" placeholder="Enter description left P text...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="about_desc_right_h1_text"><b>Description right H1 text</b></label>
                                    <input name="input_au_desc_right_h1_text" type="text" id="about_desc_right_h1_text" class="form-control" placeholder="Enter description right H1 text...">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="about_desc_right_p_text"><b>Description right P text</b></label>
                                    <input name="input_au_desc_right_p_text" type="text" id="about_desc_right_p_text" class="form-control" placeholder="Enter description right P text...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-block btn-success mt-3"><b>Create / Add</b></button>
            </form>
        </div>
    <?php } else { ?>
        <style>
            .h1-err-message {
                background-color: rgba(255, 0, 0, 0.16);
                color: #000000;
                font-weight: bold;
            }
        </style>
        <h1 class="h6 h1-err-message rounded px-3 py-4 m-3 d-flex flex-column">
            Error! You already have a record in the database. Please delete the record or edit it.
            <div class="col-lg-6 mt-3">
                <div class="row">
                    <a href="#" class="btn btn-warning btn-icon-split mr-3">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Edit About Us</span>
                    </a>
                    <a onclick="return confirm('Are you sure?');" href="#" class="btn btn-danger btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">Delete About Us</span>
                    </a>
                </div>

            </div>
        </h1>
    <?php } ?>
</div>

<?php $this->load->view("admin/includes/Footer"); ?>
<?php $this->load->view("admin/includes/FooterScripts"); ?>