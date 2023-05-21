<?php $this->load->view("admins/includes/HeaderScripts"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/EarnCard"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Staff Create</h6>
    </div>
    <div class="card-body">
        <!--FORMS-->
        <style>
            .input_file_cstyle {
                height: auto;
                margin: 0px;
                padding: 3px;
            }
        </style>
        <form action="<?php echo base_url('adm_create_act') ?>" method="POST" enctype="multipart/form-data">
            <h3 class="bg-primary text-center text-white mb-3 py-2 rounded"><b>Contact Information</b></h3>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="firstname"><b>First Name</b></label>
                        <input name="first_name" type="text" id="firstname" class="form-control" placeholder="Enter First Name...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="lastname"><b>Last Name</b></label>
                        <input name="last_name" type="text" id="lastname" class="form-control" placeholder="Enter Last Name...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="email"><b>Email</b></label>
                        <input name="email" type="email" id="email" class="form-control" placeholder="Enter Email...">
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12">
                    <label for="description"><b>Description</b></label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="position"><b>Position</b></label>
                        <select name="position" id="position" class="form-control">
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
                        <input name="mobile" type="text" id="mobile" class="form-control" placeholder="Enter Mobile...">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="whatsapp"><b>WhatsApp</b></label>
                        <input name="whatsapp" type="text" id="whatsapp" class="form-control" placeholder="Enter WhatsApp...">
                    </div>
                </div>
            </div>
            <h3 class="bg-primary text-center text-white mt-3 mb-3 py-2 rounded"><b>Social Information</b></h3>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="facebook"><b>Facebook</b></label>
                        <input name="facebook" type="text" id="facebook" class="form-control" placeholder="Enter Facebook URL...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="instagram"><b>Instagram</b></label>
                        <input name="instagram" type="text" id="instagram" class="form-control" placeholder="Enter Instagram URL...">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="telegram"><b>Telegram</b></label>
                        <input name="telegram" type="text" id="telegram" class="form-control" placeholder="Enter Telegram URL...">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="youtube"><b>Youtube</b></label>
                        <input name="youtube" type="text" id="youtube" class="form-control" placeholder="Enter Youtube URL...">
                    </div>
                </div>
            </div>
            <h3 class="bg-primary text-center text-white mt-3 mb-3 py-2 rounded"><b>Extra Information</b></h3>

            <div class="row">
            <div class="col-sm-4">
                    <div class="form-group">
                        <label for="experience"><b>Experience</b></label>
                        <input name="experience" type="text" id="experience" class="form-control">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="acc_status"><b>Account Status</b></label>
                        <select name="acc_status" id="acc_status" class="form-control">
                            <option value="">--SELECT--</option>
                            <option value="enabled">Enabled</option>
                            <option value="disabled">Disabled</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="acc_photo"><b>Account Photo</b></label>
                        <input name="acc_photo" type="file" id="acc_photo" class="form-control input_file_cstyle">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-primary"><b>Create/Save</b></button>
        </form>
        <!--FORMS-->
    </div>
</div>

<?php $this->load->view("admins/includes/Footer"); ?>
<?php $this->load->view("admins/includes/FooterScripts"); ?>