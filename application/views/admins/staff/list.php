<?php $this->load->view("admins/includes/HeaderScripts"); ?>
<?php $this->load->view("admins/includes/Sidebar"); ?>
<?php $this->load->view("admins/includes/Navbar"); ?>
<?php $this->load->view("admins/includes/EarnCard"); ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">STAFF LIST</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Mobile</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Mobile</th>
                        <th>Status</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>F_NAME_TEST</td>
                        <td>L_NAME_TEST</td>
                        <td>EMAIL_TEST</td>
                        <td>POS_TEST</td>
                        <td>MOBILE_TEST</td>
                        <td>STATUS_TEST</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $this->load->view("admins/includes/Footer"); ?>
<?php $this->load->view("admins/includes/FooterScripts"); ?>