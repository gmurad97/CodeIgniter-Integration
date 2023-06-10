<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Navbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Header Lending &RightArrow; Create</h6>
    </div>
    <div class="card-body">
        <form>
            <h3 class="bg-gradient-dark text-center text-white mb-3 py-2 rounded"><b>Header Lending</b></h3>
            <style>
                .fix_fa_select_glyph{
                    font-weight: 900 !important;
                }
                .fix_fa_select_glyph>option{
                    font-weight: 900 !important;
                }
            </style>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="bgl_video"><b>Video</b></label>
                        <input type="file" name="input_bg_video" id="bgl_video" class="form-control p-1">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1 pr-1">
                    <div class="form-group">
                        <label for="select_icon_glyph"><b>Icon</b></label>
                        
                        <select name="input_icon_text" id="select_icon_glyph" class="fa fix_fa_select_glyph form-control">
                            <option value="empty"></option>
                            <option value="fas fa-fw fa-map-marker-alt">&#xf3c5;</option>
                            <option value="fas fa-fw fa-phone-alt">&#xf879;</option>
                            <option value="fab fa-fw fa-whatsapp">&#xf40c;</option>
                            <option value="">&#xf2cb;</option>
                        </select>






                    </div>
                </div>


                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="solka">12312321321</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-block btn-success"><b>Create / Add</b></button>
        </form>
    </div>
</div>

<?php $this->load->view("admin/includes/Footer"); ?>
<?php $this->load->view("admin/includes/FooterScripts"); ?>