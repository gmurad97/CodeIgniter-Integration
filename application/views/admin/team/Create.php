<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Navbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Team &RightArrow; Create </h6>
        <a href="<?php echo base_url('team_list'); ?>" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Go to list</span>
        </a>
    </div>
    <div class="card-body">
        <form action="<?php echo base_url('team_create_action'); ?>" method="POST" enctype="multipart/form-data">
            <h3 class="bg-gradient-dark text-center text-white mb-3 py-2 rounded"><b>Personal Information</b></h3>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="firstname"><b>First Name</b></label>
                        <input name="input_first_name" type="text" id="firstname" class="form-control" placeholder="Enter First Name...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="lastname"><b>Last Name</b></label>
                        <input name="input_last_name" type="text" id="lastname" class="form-control" placeholder="Enter Last Name...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="email"><b>Email</b></label>
                        <input name="input_email" type="email" id="email" class="form-control" placeholder="Enter Email...">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                    <label for="description"><b>Description</b></label>
                    <textarea name="input_description" id="description" cols="30" rows="5" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="position"><b>Position</b></label>
                        <select name="input_position" id="position" class="form-control">
                            <option value="">--SELECT--</option>
                            <option value="director">Director</option>
                            <option value="manager">Manager</option>
                            <option value="master">Master</option>
                            <option value="asistent">Asistent</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="mobile"><b>Mobile</b></label>
                        <input name="input_mobile" type="text" id="mobile" class="form-control" placeholder="Enter Mobile...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="whatsapp"><b>WhatsApp</b></label>
                        <input name="input_whatsapp" type="text" id="whatsapp" class="form-control" placeholder="Enter WhatsApp...">
                    </div>
                </div>
            </div>
            <h3 class="bg-gradient-dark text-center text-white mt-3 mb-3 py-2 rounded"><b>Social Information</b></h3>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="facebook"><b>Facebook</b></label>
                        <input name="input_facebook" type="text" id="facebook" class="form-control" placeholder="Enter Facebook URL...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="instagram"><b>Instagram</b></label>
                        <input name="input_instagram" type="text" id="instagram" class="form-control" placeholder="Enter Instagram URL...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="telegram"><b>Telegram</b></label>
                        <input name="input_telegram" type="text" id="telegram" class="form-control" placeholder="Enter Telegram URL...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="youtube"><b>Youtube</b></label>
                        <input name="input_youtube" type="text" id="youtube" class="form-control" placeholder="Enter Youtube URL...">
                    </div>
                </div>
            </div>
            <h3 class="bg-gradient-dark text-center text-white mt-3 mb-3 py-2 rounded"><b>Extra Information</b></h3>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="experience"><b>Experience</b></label>
                        <input name="input_experience" type="number" id="experience" class="form-control" min="0" max="9999">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="status"><b>Account Status</b></label>
                        <select name="input_status" id="status" class="form-control">
                            <option value="">--SELECT--</option>
                            <option value="active">Active</option>
                            <option value="deactive">Deactive</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="img"><b>Account Photo</b></label>
                        <input name="input_img" type="file" id="img" class="form-control p-1">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-success"><b>Create / Add</b></button>
        </form>
    </div>
</div>

<?php $this->load->view("admin/includes/Footer"); ?>
<?php $this->load->view("admin/includes/FooterScripts"); ?>