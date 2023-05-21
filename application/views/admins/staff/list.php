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
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Position</th>
                        <th>Experience</th>
                        <th>Email</th>
                        <th>Description</th>
                        <th>Mobile</th>
                        <th>Whatsapp</th>
                        <th>Facebook</th>
                        <th>Instagram</th>
                        <th>Telegram</th>
                        <th>Youtube</th>
                        <th>Status</th>
                        <th>Created date</th>
                        <th>User img</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Position</th>
                        <th>Experience</th>
                        <th>Email</th>
                        <th>Description</th>
                        <th>Mobile</th>
                        <th>Whatsapp</th>
                        <th>Facebook</th>
                        <th>Instagram</th>
                        <th>Telegram</th>
                        <th>Youtube</th>
                        <th>Status</th>
                        <th>Created date</th>
                        <th>User img</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                    $db_query = $this->db->get("user");
                    foreach ($db_query->result() as $row_arr) {
                        echo "<tr>";
                        foreach ($row_arr as $row_arr => $row_value) {
                            echo "<td>";
                            echo $row_value;
                            echo "</td>";
                        }
                        echo "</tr>";
                    }

                    /* echo "<td>";
                        echo $row->firstName;
                        echo "</td>"; */
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php $this->load->view("admins/includes/Footer"); ?>
<?php $this->load->view("admins/includes/FooterScripts"); ?>