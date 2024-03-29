<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Navbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Working Hours &RightArrow; Create</h6>
    </div>
    <div class="card-body">
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
        <form action="<?php echo base_url('working_hours_create_action'); ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
            <h3 class="bg-gradient-dark text-center text-white mb-3 py-2 rounded"><b>Working Hours</b></h3>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="wh_lending_img"><b>Image Upload</b></label>
                        <input type="file" name="input_wh_lending_img" id="wh_lending_img" hidden>
                        <div class="file_upload_block">
                            <i class="fas fa-plus-circle fas-js"></i>
                        </div>
                        <script>
                            document.querySelector("#wh_lending_img").addEventListener("change", function() {
                                document.querySelector(".fas-js").classList.replace("fa-plus-circle", "fa-pen");
                                document.querySelector(".file_upload_block").style.backgroundImage = `url("${URL.createObjectURL(document.querySelector("#wh_lending_img").files[0])}")`;
                                document.querySelector(".file_upload_block").style.color = "#ffffff";
                            });
                            document.querySelector(".file_upload_block").addEventListener("click", function() {
                                document.querySelector("#wh_lending_img").click();
                            });
                        </script>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="base_h1_text"><b>Base H1 Text</b></label>
                                <input name="input_base_h1_text" type="text" id="base_h1_text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="monday_text"><b>Monday text</b></label>
                                <input name="input_monday_text" type="text" id="monday_text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="monday_time"><b>Monday Time</b></label>
                                <input name="input_monday_time" type="text" id="monday_time" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="tuesday_text"><b>Tuesday text</b></label>
                                <input name="input_tuesday_text" type="text" id="tuesday_text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="tuesday_time"><b>Tuesday Time</b></label>
                                <input name="input_tuesday_time" type="text" id="tuesday_time" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="wednesday_text"><b>Wednesday text</b></label>
                                <input name="input_wednesday_text" type="text" id="wednesday_text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="wednesday_time"><b>Wednesday Time</b></label>
                                <input name="input_wednesday_time" type="text" id="wednesday_time" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="thursday_text"><b>Thursday text</b></label>
                                <input name="input_thursday_text" type="text" id="thursday_text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="thursday_time"><b>Thursday Time</b></label>
                                <input name="input_thursday_time" type="text" id="thursday_time" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="friday_text"><b>Friday text</b></label>
                                <input name="input_friday_text" type="text" id="friday_text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="friday_time"><b>Friday Time</b></label>
                                <input name="input_friday_time" type="text" id="friday_time" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="saturday_text"><b>Saturday text</b></label>
                                <input name="input_saturday_text" type="text" id="saturday_text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="saturday_time"><b>Saturday Time</b></label>
                                <input name="input_saturday_time" type="text" id="saturday_time" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="sunday_text"><b>Sunday text</b></label>
                                <input name="input_sunday_text" type="text" id="sunday_text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="sunday_time"><b>Sunday Time</b></label>
                                <input name="input_sunday_time" type="text" id="sunday_time" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-success"><b>Create / Add</b></button>
        </form>
    </div>
</div>

<?php $this->load->view("admin/includes/Footer"); ?>
<?php $this->load->view("admin/includes/FooterScripts"); ?>