<?php if (!$this->session->userdata("adm_login")) { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>SB Admin Panel</title>
        <link rel="icon" href="<?php echo base_url('public/admin/assets/img/favicon.png'); ?>" type="image/png">
        <link href="<?php echo base_url('public/admin/assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="<?php echo base_url('public/admin/assets/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
    </head>

    <body class="bg-gradient-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="card o-hidden border-0 shadow-lg my-5">
                        <div class="card-body p-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="full-wh"></div>
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h3 text-uppercase text-gray-800 mb-4">XLBarbeshop Admin Panel</h1>
                                        </div>
                                        <form class="user" action="<?php echo base_url('admin_auth_action'); ?>" method="POST" enctype="application/x-www-form-urlencoded">
                                            <div class="form-group">
                                                <label for="label_admin_username">Username</label>
                                                <input type="text" name="input_admin_username" class="form-control" id="label_admin_username" placeholder="Enter username...">
                                            </div>
                                            <div class="form-group">
                                                <label for="label_admin_password">Password</label>
                                                <input type="password" name="input_admin_password" class="form-control" id="label_admin_password" placeholder="Enter password...">
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-block mt-4">Authentication</button>

                                            <style>
                                                .h1-err-message {
                                                    background-color: rgba(255, 0, 0, 0.24);
                                                    color: red;
                                                }

                                                .h1-success-message {
                                                    background-color: rgba(0, 255, 0, 0.24);
                                                    color: green;
                                                }
                                            </style>

                                            <?php if ($this->session->flashdata("adm_auth_error")) { ?>
                                                <h1 class="h1-err-message h6 text-center rounded p-3 mt-4">
                                                    <?php echo $this->session->flashdata("adm_auth_error") ?>
                                                </h1>
                                            <?php } ?>
                                            <?php if ($this->session->flashdata("adm_logout_success")) { ?>
                                                <h1 class="h1-success-message h6 text-center rounded p-3 mt-4">
                                                    <?php echo $this->session->flashdata("adm_logout_success") ?>
                                                </h1>
                                            <?php } ?>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?php echo base_url('public/admin/assets/vendor/jquery/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('public/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="<?php echo base_url('public/admin/assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
        <script src="<?php echo base_url('public/admin/assets/js/sb-admin-2.min.js'); ?>"></script>
    </body>

    </html>

<?php } else {
    redirect(base_url('dashboard'));
}
?>