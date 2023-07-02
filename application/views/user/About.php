<?php $this->load->view("user/includes/HeadLinks"); ?>
<?php $this->load->view("user/includes/Preloader"); ?>
<?php $this->load->view("user/includes/Navbar"); ?>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="mb-3">Haqqımızda</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="<?php echo base_url('index'); ?>">Ana səhifə</a></li>
                <li style="color: #D7B56D !important;" class="breadcrumb-item text-primary active" aria-current="page">Haqqımızda</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
    <h2 style="color: #D7B56D !important">İşimiz iş, sözümüz söz!</h2>
</div>

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

<?php $this->load->view("user/includes/Footer"); ?>
<?php $this->load->view("user/includes/FooterScripts"); ?>