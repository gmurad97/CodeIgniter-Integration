<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Navbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">About &RightArrow; Create </h6>
    </div>
    <?php if (empty($get_db_au_row["au_id"])) { ?>
        <div class="card-body">




        
            <form>
                <h3 class="bg-gradient-dark text-center text-white mb-3 py-2 rounded"><b>About Us</b></h3>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="firstname"><b>First Name</b></label>
                            <input name="input_first_name" type="text" id="firstname" class="form-control" placeholder="Enter First Name...">
                        </div>
                    </div>
                </div>









                <button type="submit" class="btn btn-block btn-success"><b>Create / Add</b></button>
            </form>






        </div>
    <?php } else { ?>
        <style>
            .h1-err-message {
                background-color: rgba(255, 0, 0, 0.16);
                color: #000000;
                font-weight: bold;
            }
        </style>
        <h1 class="h6 h1-err-message rounded px-3 py-4 m-3 d-flex flex-column">
            Error! You already have a record in the database. Please delete the record or edit it.
            <div class="col-lg-6 mt-3">
                <div class="row">
                    <a href="#" class="btn btn-warning btn-icon-split mr-3">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Edit About Us</span>
                    </a>
                    <a onclick="return confirm('Are you sure?');" href="#" class="btn btn-danger btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">Delete About Us</span>
                    </a>
                </div>

            </div>
        </h1>
    <?php } ?>
</div>

<?php $this->load->view("admin/includes/Footer"); ?>
<?php $this->load->view("admin/includes/FooterScripts"); ?>