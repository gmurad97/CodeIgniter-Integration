<?php $this->load->view("user/includes/HeadLinks"); ?>
<?php $this->load->view("user/includes/Preloader"); ?>
<?php $this->load->view("user/includes/Navbar"); ?>

<!-- Carousel Start -->
<?php if ($header_lending_get_db) { ?>
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <video autoplay muted loop id="myVideo" style="width:100%;" src="<?php echo base_url('file_manager/header_lending/').$header_lending_get_db["hl_video"]; ?>"></video>
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
                        <img style="" class="img-fluid w-75 align-self-end" src="<?php echo base_url('file_manager/about_us/') . $about_us_get_db["au_img"]; ?>" alt="">
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
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                    <p style="color: #D7B56D !important" class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">Qiymətlər</p>
                    <h2 class="mb-4">Qiymətlərimizlə tanış olun</h2>
                    <div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <h6 class="mb-0">Saç kəsimi</h6>
                            <span style="color: #D7B56D !important" class="text-primary">20 AZN</span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <h6 class="mb-0">Saqqal kəsimi</h6>
                            <span style="color: #D7B56D !important" class="text-primary">5-15 AZN</span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <h6 class="mb-0">Təraş</h6>
                            <span style="color: #D7B56D !important" class="text-primary">10-20 AZN</span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <h6 class="mb-0">Saç boyama</h6>
                            <span style="color: #D7B56D !important" class="text-primary">15-30 AZN</span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <h6 class="mb-0">Keratin + Perma</h6>
                            <span style="color: #D7B56D !important" class="text-primary">30-150 AZN</span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <h6 class="mb-0">Saç darama</h6>
                            <span style="color: #D7B56D !important" class="text-primary">5-15 AZN</span>
                        </div>
                        <div class="d-flex justify-content-between py-2">
                            <h6 class="mb-0">VİP saç kəsimi</h6>
                            <span style="color: #D7B56D !important" class="text-primary">30-50 AZN</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100">
                    <img class="img-fluid h-100" src="<?php echo base_url('public/user/assets/img/price.jpg'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
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
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="h-100">
                    <img class="img-fluid h-100" src="<?php echo base_url('public/user/assets/img/open.jpg'); ?>" alt="">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="bg-secondary h-100 d-flex flex-column justify-content-center p-5">
                    <p style="color: #D7B56D !important" class="d-inline-flex bg-dark text-primary py-1 px-4 me-auto">İş saatlarımız</p>
                    <h2 class="mb-4">Ödənişsiz dayanacağımız mövcuddur</h2>
                    <div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <h6 class="mb-0">Bazar ertəsi</h6>
                            <span>10:00-21:00</span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <h6 class="mb-0">Çərşəmbə axşamı</h6>
                            <span>10:00-21:00</span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <h6 class="mb-0">Çərşəmbə</h6>
                            <span>10:00-21:00</span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <h6 class="mb-0">Cümə axşamı</h6>
                            <span>10:00-21:00</span>
                        </div>
                        <div class="d-flex justify-content-between border-bottom py-2">
                            <h6 class="mb-0">Cümə</h6>
                            <span>10:00-21:00</span>
                        </div>
                        <div class="d-flex justify-content-between py-2">
                            <h6 class="mb-0">Şənbə / Bazar</h6>
                            <span>10:00-20:00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Working Hours End -->

<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p style="color: #D7B56D !important" class="d-inline-block bg-secondary text-primary py-1 px-4">Rəylər</p>
            <h1>Müştərilərimiz nə düşünür?</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='<?php echo base_url('public/user/assets/img/testimonial-1.jpg') ?>' alt=''>">
                <h4>Nail bəy</h4>
                <p style="color: #D7B56D !important" class="text-primary">Mühasib</p>
                <span class="fs-5">Bizə doğma insan, mehriban, pozitiv bərbərimiz İbrahim usta, əlləriniz var olsun, dəyərli sənətkar!</span>
            </div>
            <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='<?php echo base_url('public/user/assets/img/testimonial-2.jpg') ?>' alt=''>">
                <h4>Fərid bəy</h4>
                <p style="color: #D7B56D !important" class="text-primary">Pediatr</p>
                <span class="fs-5">Öz dərin təşəkkürümü bildirirəm ki, ailəvi olaraq bizə layiqli xidmət göstərirsiniz və biz də daima sizə sadiq qalırıq.</span>
            </div>
            <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='<?php echo base_url('public/user/assets/img/testimonial-3.jpg') ?>' alt=''>">
                <h4>Ayaz bəy</h4>
                <p style="color: #D7B56D !important" class="text-primary">Zərgər</p>
                <span class="fs-5">Peşəkar bərbərlikdən savayı, əsl dost, sevimli, pozitiv və gülərüz insan, sənə ən əsası can sağlığı, uzun ömür və gələcək işlərində hər zaman uğur əldə etməyi arzulayıram. </span>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

<?php $this->load->view("user/includes/Footer"); ?>
<?php $this->load->view("user/includes/FooterScripts"); ?>