<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Navbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Footer &RightArrow; Create</h6>
    </div>
    <div class="card-body">
        <form>
            <h3 class="bg-gradient-dark text-center text-white mb-3 py-2 rounded"><b>Footer</b></h3>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                    <input type="text" name="" id="" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <input type="color" name="" id="">
                    <input type="color" name="" id="">
                    <input type="color" name="" id="">
                    <input type="color" name="" id=""> <input type="color" name="" id="">
                    <input type="color" name="" id="">
                    <input type="color" name="" id="">
                    <input type="color" name="" id="">
                    <input type="color" name="" id="">
                    <input type="color" name="" id="">
                    <input type="color" name="" id="">

                </div>
            </div>
            <button type="submit" class="btn btn-block btn-success"><b>Create / Add</b></button>
        </form>
    </div>
</div>

<?php $this->load->view("admin/includes/Footer"); ?>
<?php $this->load->view("admin/includes/FooterScripts"); ?>