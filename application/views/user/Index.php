<?php $this->load->view("user/includes/HeadLinks"); ?>
<?php $this->load->view("user/includes/Preloader"); ?>
<?php $this->load->view("user/includes/Navbar"); ?>

<!-- Carousel Start -->
<?php if ($header_lending_get_db) { ?>
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <video autoplay muted loop id="myVideo" style="width:100%;" src="<?php echo base_url('file_manager/header_lending/') . $header_lending_get_db["hl_video"]; ?>"></video>
                    <div class="carousel-caption d-flex align-items-center justify-content-center text-start">
                        <div class="mx-sm-5 px-5" style="max-width: 900px;">
                            <h1 style="color: #D7B56D !important" class="text-center mb-3"><?php echo $header_lending_get_db["hl_base_h1_text"]; ?></h1><br><br><br><br>
                            <h3 style="font-size: 17px !important" class="text-white mb-4 animated slideInDown"><i style="color: #D7B56D !important" class="<?php echo $header_lending_get_db["hl_first_select_icon"]; ?> text-primary me-3"></i><?php echo $header_lending_get_db["hl_first_p_text"]; ?></h3>
                            <h3 style="font-size: 17px !important" class="text-white mb-4 animated slideInDown"><i style="color: #D7B56D !important" class="<?php echo $header_lending_get_db["hl_second_select_icon"]; ?> text-primary me-3"></i><?php echo $header_lending_get_db["hl_second_p_text"]; ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Carousel End -->

<!-- About Start -->
<?php if ($about_us_get_db) { ?>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img style="height: 500px;object-fit: cover;" class="img-fluid w-75 align-self-end" src="<?php echo base_url('file_manager/about_us/') . $about_us_get_db["au_img"]; ?>" alt="">
                        <div class="w-50 bg-secondary p-5" style="margin-top: -25%;">
                            <div style="text-align:center;">
                                <h1 style="color: #D7B56D !important;" class="text-primary mb-3"><?php echo $about_us_get_db["au_img_first_text"]; ?></h1>
                                <h2 class="mb-0"><?php echo $about_us_get_db["au_img_second_text"]; ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p style="color: #D7B56D !important" class="d-inline-block bg-secondary text-primary py-1 px-4">Haqqımızda</p>
                    <h2 class="mb-4"><?php echo $about_us_get_db["au_desc_base_h1_text"]; ?></h2>
                    <p style="white-space: pre-wrap;"><?php echo $about_us_get_db["au_desc_base_p_text"]; ?></p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <h3 class="mb-3"><?php echo $about_us_get_db["au_desc_left_h1_text"]; ?></h3>
                            <p class="mb-0"><?php echo $about_us_get_db["au_desc_left_p_text"]; ?></p>
                        </div>
                        <div class="col-md-6">
                            <h3 class="mb-3"><?php echo $about_us_get_db["au_desc_right_h1_text"]; ?></h3>
                            <p class="mb-0"><?php echo $about_us_get_db["au_desc_right_p_text"]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- About End -->

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

<!-- Team Start -->
<?php if ($team_get_db) { ?>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p style="color: #D7B56D !important" class="d-inline-block bg-secondary text-primary py-1 px-4">Ustalarımız</p>
                <h2>Ustalarımızla tanış olun:</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <?php foreach ($team_get_db as $team_get_db_key) { ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item">
                            <div class="team-img position-relative overflow-hidden">
                                <img style="height: 400px !important; width:100% !important; object-fit: cover;" class="img-fluid" src="<?php echo base_url("file_manager/team_profile_img/") . $team_get_db_key["t_img"]; ?>" alt="">
                                <div class="team-social">
                                    <?php if ($team_get_db_key["t_email"]) { ?>
                                        <a class="btn btn-square" href="mailto:<?php echo $team_get_db_key["t_email"]; ?>"><i style="color: #D7B56D !important" class="fas fa-envelope"></i></a>
                                    <?php } ?>
                                    <?php if ($team_get_db_key["t_mobile"]) { ?>
                                        <a class="btn btn-square" href="tel:<?php echo $team_get_db_key["t_mobile"]; ?>"><i style="color: #D7B56D !important" class="fas fa-mobile"></i></a>
                                    <?php } ?>
                                    <?php if ($team_get_db_key["t_whatsapp"]) { ?>
                                        <a class="btn btn-square" href="https://api.whatsapp.com/send?phone=<?php echo $team_get_db_key["t_whatsapp"]; ?>"><i style="color: #D7B56D !important" class="fab fa-whatsapp"></i></a>
                                    <?php } ?>
                                    <?php if ($team_get_db_key["t_facebook"]) { ?>
                                        <a class="btn btn-square" href="<?php echo $team_get_db_key["t_facebook"]; ?>"><i style="color: #D7B56D !important" class="fab fa-facebook"></i></a>
                                    <?php } ?>
                                    <?php if ($team_get_db_key["t_instagram"]) { ?>
                                        <a class="btn btn-square" href="<?php echo $team_get_db_key["t_instagram"]; ?>"><i style="color: #D7B56D !important" class="fab fa-instagram"></i></a>
                                    <?php } ?>
                                    <?php if ($team_get_db_key["t_telegram"]) { ?>
                                        <a class="btn btn-square" href="<?php echo $team_get_db_key["t_telegram"]; ?>"><i style="color: #D7B56D !important" class="fab fa-telegram"></i></a>
                                    <?php } ?>
                                    <?php if ($team_get_db_key["t_youtube"]) { ?>
                                        <a class="btn btn-square" href="<?php echo $team_get_db_key["t_youtube"]; ?>"><i style="color: #D7B56D !important" class="fab fa-youtube"></i></a>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="bg-secondary text-center p-4">
                                <h5><?php echo $team_get_db_key["t_firstname"]; ?></h5>
                                <span style="color: #D7B56D !important" class="text-primary text-capitalize"><?php echo $team_get_db_key["t_position"]; ?></span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Team End -->

<!-- Working Hours Start -->
<?php if ($working_hours_get_db) { ?>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="h-100">
                        <img style="height:555px !important; width:100% !important; object-fit: cover;" class="img-fluid h-100" src="<?php echo base_url("file_manager/working_hours/") . $working_hours_get_db["wh_img"]; ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                        <p style="color: #D7B56D !important" class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">İş saatlarımız</p>
                        <h2 class="mb-4"><?php echo $working_hours_get_db["wh_base_h1_text"]; ?></h2>
                        <div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0"><?php echo $working_hours_get_db["wh_week_monday"]; ?></h6>
                                <span><?php echo $working_hours_get_db["wh_time_monday"]; ?></span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0"><?php echo $working_hours_get_db["wh_week_tuesday"]; ?></h6>
                                <span><?php echo $working_hours_get_db["wh_time_tuesday"]; ?></span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0"><?php echo $working_hours_get_db["wh_week_wednesday"]; ?></h6>
                                <span><?php echo $working_hours_get_db["wh_time_wednesday"]; ?></span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0"><?php echo $working_hours_get_db["wh_week_thursday"]; ?></h6>
                                <span><?php echo $working_hours_get_db["wh_time_thursday"]; ?></span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0"><?php echo $working_hours_get_db["wh_week_friday"]; ?></h6>
                                <span><?php echo $working_hours_get_db["wh_time_friday"]; ?></span>
                            </div>
                            <div class="d-flex justify-content-between border-bottom py-2">
                                <h6 class="mb-0"><?php echo $working_hours_get_db["wh_week_saturday"]; ?></h6>
                                <span><?php echo $working_hours_get_db["wh_time_saturday"]; ?></span>
                            </div>
                            <div class="d-flex justify-content-between py-2">
                                <h6 class="mb-0"><?php echo $working_hours_get_db["wh_week_sunday"]; ?></h6>
                                <span><?php echo $working_hours_get_db["wh_time_sunday"]; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Working Hours End -->

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