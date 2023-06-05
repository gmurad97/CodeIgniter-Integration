<?php $this->load->view("admin/includes/HeaderScripts"); ?>
<?php $this->load->view("admin/includes/Sidebar"); ?>
<?php $this->load->view("admin/includes/Navbar"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Logo &RightArrow; Create </h6>
    </div>
    <div class="card-body">


        <form>
            <h3 class="bg-gradient-dark text-center text-white mb-3 py-2 rounded"><b>Services</b></h3>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="services_h1_text"><b>Heading text</b></label>
                        <input name="input_services_h1_text" type="text" id="services_h1_text" class="form-control" placeholder="Enter Services H1 Text...">
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="services_p_text"><b>Paragraph Text</b></label>
                        <textarea name="input_services_p_text" id="services_p_text" rows="3" placeholder="Enter Services P Text..." class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-block btn-success"><b>Create / Add</b></button>
        </form>


    </div>
</div>

<?php $this->load->view("admin/includes/Footer"); ?>
<?php $this->load->view("admin/includes/FooterScripts"); ?>