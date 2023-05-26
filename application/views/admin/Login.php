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
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h3 text-gray-800 mb-3">XLBarbeshop Admin Panel</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="admin_email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Enter Username...">
                                        </div>
                                        <div class="form-group">
                                            <input type="admin_password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Enter Password...">
                                        </div>
                                        <a href="<?php echo base_url('dashboard'); ?>" class="btn btn-primary btn-user btn-block">Login</a>
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