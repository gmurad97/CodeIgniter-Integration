<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Navbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Price &RightArrow; Edit</h6>
        <a onclick="return confirm('Do you really want to delete price?');" href="<?php echo base_url('price_delete'); ?>" class="btn btn-danger btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-trash"></i>
            </span>
            <span class="text">Delete</span>
        </a>
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

            .fa-dynamic-price-del {
                font-size: 32px;
                transition: color 128ms linear;
                cursor: pointer;
            }

            .fa-dynamic-price-del:hover {
                color: rgba(142, 39, 31, 1) !important;
            }

            .fa-dynamic-price-add {
                font-size: 32px;
                transition: color 128ms linear;
                cursor: pointer;
            }

            .fa-dynamic-price-add:hover {
                color: rgba(0, 106, 78, 1) !important;
            }
        </style>
        <h3 class="bg-gradient-warning text-center text-white mb-3 py-2 rounded"><b>Price</b></h3>
        <form action="<?php echo base_url('price_edit_action'); ?>" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm-8">
                    <div class="form-group">
                        <label for="price_base_h1_text"><b>Base H1 text</b></label>
                        <input value="<?php echo $price_data["p_base_h1_text"]; ?>" name="input_price_base_h1_text" id="price_base_h1_text" type="text" class="form-control">
                    </div>
                    <div class="form-group d-flex flex-column-reverse" id="dynamic-parent-price">
                        <div class="row" id="dynamic-row-price">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="price_text"><b>Price text</b></label>
                                    <input value="<?php echo explode('[price_separator_text]', $price_data["p_arr_text"])[0]; ?>" name="input_price_text[]" id="price_text" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="price_value"><b>Price value</b></label>
                                    <input value="<?php echo explode('[price_separator_value]', $price_data["p_arr_value"])[0]; ?>" name="input_price_value[]" id="price_value" type="number" class="form-control">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="currency"><b>Currency</b></label>
                                    <select name="input_currency[]" id="currency" class="form-control">

                                        <?php foreach ($p_select_option as $p_select_option_key => $p_select_option_value) { ?>
                                            <option <?php if (explode('[price_separator_currency]', $price_data["p_arr_currency"])[0] == $p_select_option_value) { ?> selected <?php } ?> value="<?php echo $p_select_option_value; ?>"><?php echo $p_select_option_key; ?></option>
                                        <?php } ?>


                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-1">
                                <div class="form-group d-flex flex-column">
                                    <label><b>Add</b></label>
                                    <i class="fas fa-plus-circle fa-dynamic-price-add text-success"></i>
                                </div>
                            </div>
                        </div>
                        <?php
                        $price_counter = 0;
                        for ($price_arr_index = 1; $price_arr_index < count(explode("[price_separator_text]", $price_data["p_arr_text"])); $price_arr_index++) {
                            ++$price_counter;
                        ?>
                            <div class="row" id="dynamic-row-price-<?php echo $price_counter; ?>">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="price_text_<?php echo $price_counter; ?>"><b>Price text</b></label>
                                        <input value="<?php echo explode("[price_separator_text]", $price_data["p_arr_text"])[$price_arr_index] ?>" name="input_price_text[]" id="price_text_<?php echo $price_counter; ?>" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="price_value_<?php echo $price_counter; ?>"><b>Price value</b></label>
                                        <input value="<?php echo explode("[price_separator_value]", $price_data["p_arr_value"])[$price_arr_index] ?>" name="input_price_value[]" id="price_value_<?php echo $price_counter; ?>" type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="currency_<?php echo $price_counter; ?>"><b>Currency</b></label>
                                        <select name="input_currency[]" id="currency_<?php echo $price_counter; ?>" class="form-control">
                                            <?php foreach ($p_select_option as $p_select_option_key => $p_select_option_value) { ?>
                                                <option <?php if (explode('[price_separator_currency]', $price_data["p_arr_currency"])[$price_arr_index] == $p_select_option_value) { ?> selected <?php } ?> value="<?php echo $p_select_option_value; ?>"><?php echo $p_select_option_key; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="form-group d-flex flex-column"><label><b>Del</b></label><i class="fas fa-minus-circle fa-dynamic-price-del text-danger" onclick="deleteDI('dynamic-row-price-<?php echo $price_counter; ?>');"></i></div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>

                    <h1 class="h6 text-muted text-center" id="dynamic-input-counter">Input Count: 1</h1>
                    <script>
                        const MAX_DYNAMIC_INPUT_VALUE = 10;
                        const dynamicPriceAdd = document.querySelector(".fa-dynamic-price-add");
                        const dynamicParentPrice = document.querySelector("#dynamic-parent-price");
                        const dynamicStatCounter = document.querySelector("#dynamic-input-counter");

                        dynamicStatCounter.innerText = "Input Count: " + (document.querySelectorAll("[id^='dynamic-row-price']").length);

                        function generateUID(uidLength) {
                            let generatedUID = "";
                            let wordsUID = "GcByxS1oRAnThCa7K2OqEplsIbPvMNX84mtwW6FZH9erdJu5L0kDjQYif3gUVz";
                            for (let x = 0; x <= uidLength; x++) {
                                generatedUID += wordsUID.charAt(Math.floor(Math.random() * wordsUID.length));
                            }
                            return generatedUID;
                        }

                        function deleteDI(elementID) {
                            document.querySelector(`#${elementID}`).remove();
                            dynamicStatCounter.innerText = "Input Count: " + (document.querySelectorAll("[id^='dynamic-row-price']").length);
                        }

                        dynamicPriceAdd.addEventListener("click", function() {
                            dynamicPriceAdd.scrollIntoView();
                            let generateDynamicUID = generateUID(8);
                            if (!(document.querySelectorAll("[id^='dynamic-row-price']").length >= MAX_DYNAMIC_INPUT_VALUE)) {
                                dynamicStatCounter.innerText = "Input Count: " + (document.querySelectorAll("[id^='dynamic-row-price']").length + 1);
                                let newDynamicObject = document.createElement("div");
                                newDynamicObject.classList.add("row");
                                newDynamicObject.id = `dynamic-row-price-${generateDynamicUID}`;
                                newDynamicObject.innerHTML += `<div class="col-sm-6"><div class="form-group"><label for="price_text_${generateDynamicUID}"><b>Price text</b></label><input name="input_price_text[]" id="price_text_${generateDynamicUID}" class="form-control"></div></div><div class="col-sm-3"><div class="form-group"><label for="price_value_${generateDynamicUID}"><b>Price value</b></label><input name="input_price_value[]" id="price_value_${generateDynamicUID}" type="number" class="form-control"></div></div><div class="col-sm-2"><div class="form-group"><label for="currency_${generateDynamicUID}"><b>Currency</b></label><select name="input_currency[]" id="currency_${generateDynamicUID}" class="form-control"><?php foreach ($p_select_option as $p_select_option_key => $p_select_option_value) { ?><option value="<?php echo $p_select_option_value; ?>"><?php echo $p_select_option_key; ?></option><?php } ?></select></div></div><div class="col-sm-1"><div class="form-group d-flex flex-column"><label><b>Del</b></label><i class="fas fa-minus-circle fa-dynamic-price-del text-danger" onclick="deleteDI(&quot;dynamic-row-price-${generateDynamicUID}&quot;)"></i></div></div>`;
                                dynamicParentPrice.appendChild(newDynamicObject);
                            }
                        });
                    </script>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="price_lending_img"><b>Image Upload</b></label>
                        <input type="file" name="input_price_lending_img" id="price_lending_img" hidden>
                        <div class="file_upload_block" style="background-image: url('<?php echo base_url('file_manager/price/') . $price_data['p_img']; ?>'); color:white;">
                            <i class="fas fa-pen fas-js"></i>
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
            </div>
            <button type="submit" class="btn btn-block btn-warning"><b>Edit</b></button>
        </form>
    </div>
</div>

<?php $this->load->view("admin/includes/Footer"); ?>
<?php $this->load->view("admin/includes/FooterScripts"); ?>