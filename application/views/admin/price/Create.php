<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Navbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Price &RightArrow; Create</h6>
    </div>
    <div class="card-body">

        <div class="row">

        </div>
        <form>
            <h3 class="bg-gradient-dark text-center text-white mb-3 py-2 rounded"><b>Logo</b></h3>
            <div class="row">

                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm-10">
                            <div class="form-group">
                                <label for="price_base_h1_text"><b>Base H1 text</b></label>
                                <input name="input_price_base_h1_text" id="price_base_h1_text" type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-10">
                            <div class="form-group">
                                <label for="price_base_h1_text"><b>Base H1 text</b></label>
                                <input name="input_price_base_h1_text" id="price_base_h1_text" type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-10">
                            <div class="form-group">
                                <label for="price_base_h1_text"><b>Base H1 text</b></label>
                                <input name="input_price_base_h1_text" id="price_base_h1_text" type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-10">
                            <div class="form-group">
                                <label for="price_base_h1_text"><b>Base H1 text</b></label>
                                <input name="input_price_base_h1_text" id="price_base_h1_text" type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-10">
                            <div class="form-group">
                                <label for="price_base_h1_text"><b>Base H1 text</b></label>
                                <input name="input_price_base_h1_text" id="price_base_h1_text" type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-10">
                            <div class="form-group">
                                <label for="price_base_h1_text"><b>Base H1 text</b></label>
                                <input name="input_price_base_h1_text" id="price_base_h1_text" type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-10">
                            <div class="form-group">
                                <label for="price_base_h1_text"><b>Base H1 text</b></label>
                                <input name="input_price_base_h1_text" id="price_base_h1_text" type="text" class="form-control">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-10">
                            <div class="form-group">
                                <label for="price_base_h1_text"><b>Base H1 text</b></label>
                                <input name="input_price_base_h1_text" id="price_base_h1_text" type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
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
                        <script>
                            function setData(input) {
                                document.querySelector(".file_upload_block").style.backgroundImage = `url("${URL.createObjectURL(input.files[0])}")`;
                                document.querySelector(".file_upload_block").style.color = "#ffffff";
                            }
                        </script>
                        <label for="price_lending_img"><b>Image Upload</b></label>
                        <input type="file" name="input_price_lending_img" id="price_lending_img" onchange="setData(this);" hidden>
                        <div class="file_upload_block">
                            <i class="fas fa-plus-circle"></i>
                        </div>
                        <script>
                            document.querySelector(".file_upload_block").addEventListener("click", function() {
                                document.querySelector("#price_lending_img").click();
                            });
                        </script>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-success"><b>Create / Add</b></button>
        </form>
    </div>
</div>

<?php $this->load->view("admin/includes/Footer"); ?>
<?php $this->load->view("admin/includes/FooterScripts"); ?>