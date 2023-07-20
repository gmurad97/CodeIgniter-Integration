<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Navbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Header Lending &RightArrow; Edit</h6>
        <a onclick="return confirm('Do you really want to remove the header lending?');" href="<?php echo base_url('header_lending_delete'); ?>" class="btn btn-danger btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-trash"></i>
            </span>
            <span class="text">Delete</span>
        </a>
    </div>
    <div class="card-body">
        <form action="<?php echo base_url('header_lending_edit_action'); ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
            <h3 class="bg-gradient-warning text-center text-white mb-3 py-2 rounded"><b>Header Lending</b></h3>
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
                <div class="col-sm-8">
                    <video autoplay muted loop controls style="border: 2px dashed orange" width="200" class="rounded" src="<?php echo base_url('file_manager/header_lending/') . $header_lending_db["hl_video"]; ?>">
                    </video>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="hl_base_h1_text"><b>Base H1 text</b></label>
                        <input value="<?php echo $header_lending_db['hl_base_h1_text']; ?>" type="text" name="input_hl_base_h1_text" id="hl_base_h1_text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="hl_first_select_icon"><b>First icon</b></label>
                        <select name="input_hl_first_select_icon" id="hl_first_select_icon" class="fa fix_fa_select_glyph form-control">
                            <?php foreach ($hl_select_option as $hl_select_option_key => $hl_select_option_value) { ?>
                                <option <?php if ($header_lending_db['hl_first_select_icon'] == $hl_select_option_value) { ?> selected <?php } ?> value="<?php echo $hl_select_option_value; ?>"><?php echo $hl_select_option_key; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="form-group">
                        <label for="hl_first_p_text"><b>First P text</b></label>
                        <input value="<?php echo $header_lending_db['hl_first_p_text']; ?>" type="text" name="input_hl_first_p_text" id="hl_first_p_text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="hl_second_select_icon"><b>Second icon</b></label>
                        <select name="input_hl_second_select_icon" id="hl_second_select_icon" class="fa fix_fa_select_glyph form-control">
                            <?php foreach ($hl_select_option as $hl_select_option_key => $hl_select_option_value) { ?>
                                <option <?php if ($header_lending_db['hl_second_select_icon'] == $hl_select_option_value) { ?> selected <?php } ?> value="<?php echo $hl_select_option_value; ?>"><?php echo $hl_select_option_key; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="form-group">
                        <label for="hl_second_p_text"><b>Second icon P text</b></label>
                        <input value="<?php echo $header_lending_db['hl_second_p_text']; ?>" type="text" name="input_hl_second_p_text" id="hl_second_p_text" class="form-control">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-warning"><b>Edit</b></button>
        </form>
    </div>
</div>

<?php $this->load->view("admin/includes/Footer"); ?>
<?php $this->load->view("admin/includes/FooterScripts"); ?>