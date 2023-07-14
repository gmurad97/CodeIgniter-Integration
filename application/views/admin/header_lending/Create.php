<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Navbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Header Lending &RightArrow; Create</h6>
    </div>
    <div class="card-body">
        <form action="<?php echo base_url('header_lending_create_action'); ?>" method="POST" enctype="multipart/form-data">
            <h3 class="bg-gradient-dark text-center text-white mb-3 py-2 rounded"><b>Header Lending</b></h3>
            <style>
                .fix_fa_select_glyph,
                .fix_fa_select_glyph>option {
                    font-weight: 900 !important;
                }
            </style>
            <?php if ($this->session->flashdata("so_validate_error")) { ?>
                <style>
                    .bg-error-message {
                        background-color: rgba(255, 0, 0, 0.16);
                    }
                </style>
                <h1 class="bg-error-message h6 text-center rounded p-3 mt-4"><?php echo $this->session->flashdata("so_validate_error"); ?></h1>
            <?php } ?>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="hl_video"><b>Video</b></label>
                        <input type="file" name="input_hl_video" id="hl_video" class="form-control p-1">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="hl_base_h1_text"><b>Base H1 text</b></label>
                        <input type="text" name="input_hl_base_h1_text" id="hl_base_h1_text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="hl_first_select_icon"><b>First icon</b></label>
                        <select name="input_hl_first_select_icon" id="hl_first_select_icon" class="fa fix_fa_select_glyph form-control">
                            <option value="fas fa-fw fa-map-marker-alt">&#xf3c5;</option>
                            <option value="fas fa-fw fa-phone-alt">&#xf879;</option>
                            <option value="fas fa-fw fa-star">&#xf005;</option>
                            <option value="fas fa-fw fa-rocket">&#xf135;</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="form-group">
                        <label for="hl_first_p_text"><b>First P text</b></label>
                        <input type="text" name="input_hl_first_p_text" id="hl_first_p_text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="hl_second_select_icon"><b>Second icon</b></label>
                        <select name="input_hl_second_select_icon" id="hl_second_select_icon" class="fa fix_fa_select_glyph form-control">
                            <option value="fas fa-fw fa-map-marker-alt">&#xf3c5;</option>
                            <option value="fas fa-fw fa-phone-alt">&#xf879;</option>
                            <option value="fas fa-fw fa-star">&#xf005;</option>
                            <option value="fas fa-fw fa-rocket">&#xf135;</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="form-group">
                        <label for="hl_second_p_text"><b>Second icon P text</b></label>
                        <input type="text" name="input_hl_second_p_text" id="hl_second_p_text" class="form-control">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-success"><b>Create / Add</b></button>
        </form>
    </div>
</div>

<?php $this->load->view("admin/includes/Footer"); ?>
<?php $this->load->view("admin/includes/FooterScripts"); ?>