<?php $this->load->view("user/includes/HeadLinks"); ?>
<?php $this->load->view("user/includes/Preloader"); ?>
<?php $this->load->view("user/includes/Navbar"); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="mb-3">Qalereya</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="<?php echo base_url('index'); ?>">Ana səhifə</a></li>
                <li style="color: #D7B56D !important" class="breadcrumb-item text-primary active" aria-current="page">Qalereya</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
    <h2 style="color: #D7B56D !important">Siz ən yaxşısına layiqsiniz!</h2>
</div>
<div class="container-fluid">
    <div class="row port-page">
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
            <img src="<?php echo base_url('public/user/assets/img/bir.jpg'); ?>" class="img-responsive center-block port-image">
        </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
            <img src="<?php echo base_url('public/user/assets/img/iki.jpg'); ?>" class="img-responsive center-block port-image">
        </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
            <img src="<?php echo base_url('public/user/assets/img/dord.jpg'); ?>" class="img-responsive center-block port-image">
        </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
            <img src="<?php echo base_url('public/user/assets/img/alti.jpg'); ?>" class="img-responsive center-block port-image">
        </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
            <img src="<?php echo base_url('public/user/assets/img/doqquz.jpg'); ?>" class="img-responsive center-block port-image">
        </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
            <img src="<?php echo base_url('public/user/assets/img/onbir.jpg'); ?>" class="img-responsive center-block port-image">
        </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
            <img src="<?php echo base_url('public/user/assets/img/yeddi.jpg'); ?>" class="img-responsive center-block port-image">
        </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
            <img src="<?php echo base_url('public/user/assets/img/oniki.jpg'); ?>" class="img-responsive center-block port-image">
        </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
            <img src="<?php echo base_url('public/user/assets/img/onuch.jpg'); ?>" class="img-responsive center-block port-image">
        </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
            <img src="<?php echo base_url('public/user/assets/img/otuz.jpg'); ?>" class="img-responsive center-block port-image">
        </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
            <img src="<?php echo base_url('public/user/assets/img/otuzbir.jpg'); ?>" class="img-responsive center-block port-image">
        </div>
        <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
            <img src="<?php echo base_url('public/user/assets/img/otuziki.jpg'); ?>" class="img-responsive center-block port-image">
        </div>
    </div>
</div>

<?php $this->load->view("user/includes/Footer"); ?>
<?php $this->load->view("user/includes/FooterScripts"); ?>