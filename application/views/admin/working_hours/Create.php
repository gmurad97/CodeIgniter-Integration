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
            <h3 class="bg-gradient-dark text-center text-white mb-3 py-2 rounded"><b>Working Hours</b></h3>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="price_lending_img"><b>Image Upload</b></label>
                        <input type="file" name="input_price_lending_img" id="price_lending_img" hidden>
                        <div class="file_upload_block">
                            <i class="fas fa-plus-circle fas-js"></i>
                        </div>
                        <script>
                            document.querySelector("#price_lending_img").addEventListener("change", function() {
                                document.querySelector(".fas-js").classList.replace("fa-plus-circle", "fa-pen");
                                document.querySelector(".file_upload_block").style.backgroundImage = `url("${URL.createObjectURL(document.querySelector("#price_lending_img").files[0])}")`;
                                document.querySelector(".file_upload_block").style.color = "#ffffff";
                            });
                            document.querySelector(".file_upload_block").addEventListener("click", function() {
                                document.querySelector("#price_lending_img").click();
                            });
                        </script>
                    </div>
                </div>







                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="firstname"><b>First Name</b></label>
                                <input name="input_first_name" type="text" id="firstname" class="form-control" placeholder="Enter First Name...">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label for="firstname"><b>First Name</b></label>
                                <input name="input_first_name" type="text" id="firstname" class="form-control" placeholder="Enter First Name...">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="firstname"><b>First Name</b></label>
                                <input name="input_first_name" type="text" id="firstname" class="form-control" placeholder="Enter First Name...">
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