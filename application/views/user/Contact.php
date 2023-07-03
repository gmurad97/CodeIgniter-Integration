<?php $this->load->view("user/includes/HeadLinks"); ?>
<?php $this->load->view("user/includes/Preloader"); ?>
<?php $this->load->view("user/includes/Navbar"); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="mb-3">Əlaqə</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="<?php echo base_url('index'); ?>">Ana səhifə</a></li>
                <li style="color: #D7B56D !important" class="breadcrumb-item text-primary active" aria-current="page">Əlaqə</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
    <h2 style="color: #D7B56D !important">Biz elə də uzaq deyilik!</h2>
</div>

<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100" style="min-height: 400px;">
                    <?php
                    if ($gmap_get_db) {
                        echo $gmap_get_db["g_iframe"];
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<?php $this->load->view("user/includes/Footer"); ?>
<?php $this->load->view("user/includes/FooterScripts"); ?>