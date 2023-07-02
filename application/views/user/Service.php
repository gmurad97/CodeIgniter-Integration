<?php $this->load->view("user/includes/HeadLinks"); ?>
<?php $this->load->view("user/includes/Preloader"); ?>
<?php $this->load->view("user/includes/Navbar"); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="mb-3">Xidmətlər</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="<?php echo base_url('index'); ?>">Ana səhifə</a></li>
                <li style="color: #D7B56D !important;" class="breadcrumb-item text-primary active" aria-current="page">Xidmətlər</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Service Start -->
<?php if ($services_get_db) { ?>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p style="color: #D7B56D !important" class="d-inline-block bg-secondary text-primary py-1 px-4">Xidmətlərimiz</p>
                <h2>Biz nələr edirik?</h2>
            </div>
            <div class="row g-4">

                <?php foreach ($services_get_db as $services_get_db_item) { ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item position-relative overflow-hidden bg-secondary d-flex h-100 p-5 ps-0">
                            <div class="ps-4">
                                <h3 style="color: #D7B56D !important" class="mb-3"><?php echo $services_get_db_item["s_h1_text"]; ?></h3>
                                <p><?php echo $services_get_db_item["s_p_text"]; ?></p>
                            </div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
<?php } ?>
<!-- Service End -->

<!-- Price Start -->
<?php if ($price_get_db) { ?>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-secondary h-100 d-flex flex-column justify-content-start p-5">
                        <p style="color: #D7B56D !important" class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">Qiymətlər</p>
                        <h2 class="mb-4"><?php echo $price_get_db["p_base_h1_text"]; ?></h2>
                        <div>
                            <?php
                            for ($price_index = 0; $price_index < count(explode("[price_separator_text]", $price_get_db["p_arr_text"])); $price_index++) { ?>
                                <div class="d-flex justify-content-between border-bottom py-2">
                                    <h6 class="mb-0"><?php echo explode("[price_separator_text]", $price_get_db["p_arr_text"])[$price_index]; ?></h6>
                                    <span style="color: #D7B56D !important; text-transform:uppercase;" class="text-primary"><?php echo explode("[price_separator_value]", $price_get_db["p_arr_value"])[$price_index] . " " . explode("[price_separator_currency]", $price_get_db["p_arr_currency"])[$price_index]; ?></span>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100">
                        <img class="img-fluid h-100" src="<?php echo base_url('file_manager/price/') . $price_get_db["p_img"]; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Price End -->

<!-- Testimonial Start -->
<?php if ($testimonial_get_db) { ?>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p style="color: #D7B56D !important" class="d-inline-block bg-secondary text-primary py-1 px-4">Rəylər</p>
                <h1>Müştərilərimiz nə düşünür?</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <?php foreach ($testimonial_get_db as $testimonial_get_db_item) { ?>
                    <div class="testimonial-item text-center" data-dot="<img style='width:100% !important;height:100% !important;object-fit:cover;' class='img-fluid' src='<?php echo base_url("file_manager/testimonial/") . $testimonial_get_db_item["t_img"]; ?>' alt=''>">
                        <h4><?php echo $testimonial_get_db_item["t_firstname"]; ?></h4>
                        <p style="color: #D7B56D !important" class="text-primary"><?php echo $testimonial_get_db_item["t_profession"]; ?></p>
                        <span class="fs-5"><?php echo $testimonial_get_db_item["t_feedback"]; ?></span>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Testimonial End -->

<?php $this->load->view("user/includes/Footer"); ?>
<?php $this->load->view("user/includes/FooterScripts"); ?>