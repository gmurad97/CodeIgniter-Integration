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

            .fa-dinamic-price-del {
                font-size: 32px;
                transition: color 128ms linear;
                cursor: pointer;
            }

            .fa-dinamic-price-del:hover {
                color: rgba(142, 39, 31, 1) !important;
            }

            .fa-dinamic-price-add {
                font-size: 32px;
                transition: color 128ms linear;
                cursor: pointer;
            }

            .fa-dinamic-price-add:hover {
                color: rgba(0, 106, 78, 1) !important;
            }
        </style>
        <form>
            <h3 class="bg-gradient-dark text-center text-white mb-3 py-2 rounded"><b>Price</b></h3>
            <div class="row">
                <div class="col-sm-8" id="dynamic-parent-price">
                    <div class="form-group">
                        <label for="price_base_h1_text"><b>Base H1 text</b></label>
                        <input name="input_price_base_h1_text" id="price_base_h1_text" type="text" class="form-control">
                    </div>



                    <div class="row" id="dynamic-row-price">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="price_text_one"><b>Price text</b></label>
                                <input name="input_price_text_one" id="price_text_one" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="price_value_one"><b>Price value</b></label>
                                <input name="input_price_value_one" id="price_value_one" type="number" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="currency_one"><b>Currency</b></label>
                                <select name="input_currency_one" id="currency_one" class="form-control">
                                    <option value="azn">AZN</option>
                                    <option value="eur">EUR</option>
                                    <option value="usd">USD</option>
                                    <option value="rub">RUB</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-1">
                            <div class="form-group d-flex flex-column">
                                <label for="currency_one"><b>Add</b></label>
                                <i class="fas fa-plus-circle fa-dinamic-price-add text-success"></i>
                            </div>
                        </div>
                    </div>

                    <!--                         
                        <div class="col-sm-1">
                            <div class="form-group d-flex flex-column">
                                <label for="currency_one"><b>Del</b></label>
                                <i class="fas fa-minus-circle fa-dinamic-price-del text-danger"></i>
                            </div>
                        </div>
                    -->

                    <script>
                        let dynamic_counter = 1;

                        let cloned_dynamic_row = 
                        `<div class="row" id="dynamic-row-price-${dynamic_counter}">
                        <div class="col-sm-5">
                            <div class="form-group">
                                <label for="price_text_one"><b>Price text</b></label>
                                <input name="input_price_text_one" id="price_text_one" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="price_value_one"><b>Price value</b></label>
                                <input name="input_price_value_one" id="price_value_one" type="number" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label for="currency_one"><b>Currency</b></label>
                                <select name="input_currency_one" id="currency_one" class="form-control">
                                    <option value="azn">AZN</option>
                                    <option value="eur">EUR</option>
                                    <option value="usd">USD</option>
                                    <option value="rub">RUB</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-1">
                        <div class="form-group d-flex flex-column">
                                <label for="currency_one"><b>Del</b></label>
                                <i class="fas fa-minus-circle fa-dinamic-price-del text-danger"></i>
                            </div>
                        </div>
                    </div>`;
                    </script>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
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