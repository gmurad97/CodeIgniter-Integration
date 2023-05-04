<!DOCTYPE html>
<html lang="az">

<head>
    <?php $this->load->view("users/includes/HeaderLinks"); ?>
</head>

<body>

    <?php $this->load->view("users/includes/Preloader"); ?>
    <?php $this->load->view("users/includes/Navbar"); ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="mb-3">Haqqımızda</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.html">Ana səhifə</a></li>
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
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column">
                        <img class="img-fluid w-75 align-self-end" src="<?php echo base_url('public/assets/user/img/about.jpg'); ?>" alt="">
                        <div class="w-50 bg-secondary p-5" style="margin-top: -25%;">
                            <center>
                                <h1 style="color: #D7B56D !important;" class="text-primary mb-3">VIP</h1>
                                <h2 class="mb-0">Xidmət</h2>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <!-- <p style="color: #D7B56D !important;" class="d-inline-block bg-secondary text-primary py-1 px-4">Haqqımızda</p> -->
                    <h2 class="mb-4">Bizimlə bağlı ətraflı məlumat əldə edin!</h2>
                    <p>XL Barbershop yeni açılmasına baxmayaraq uzun illərdir bu sahədə fəaliyyət görsədən ustaların möhtəşəm əl qabiliyyətləri sayəsində sizləri məmnun etməkdədir.</p>
                    <p class="mb-4">Bir çox sahə üzrə xidmət göstərməyimiz, müasir avadanlıqlarımız, müştərilərin rahatlığı üçün təqdim edilən şərait bizləri bir çox kişi salonundan fərqləndirən faktorlardır.</p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <h3 class="mb-3">Əziz müştərilər!</h3>
                            <p class="mb-0">Əl çatmayan arzular, çin olmayan röyalara siz də çatmaq istəyirsinizsə bizə etibar edin! Limitsiz çay/qəhvə xidmətimiz və avtomobiliniz üçün pulsuz dayanacaq imkanlarından istifadə edə bilərsiniz.</p>
                        </div>
                        <div class="col-md-6">
                            <h3 class="mb-3">Əziz valideynlər!</h3>
                            <p class="mb-0">Övladlarınızı bizim zalımıza etibar edərək həm ximdətlərimizdən istifadə edə biləcəksiniz həm də övladınızın necə əyləncəli vaxt keçirdərək yeni saç stilinə malik olacağına şahid olacaqsınız.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p style="color: #D7B56D !important" class="d-inline-block bg-secondary text-primary py-1 px-4">Ustalarımız</p>
                <h2>Ustalarımızla tanış olun:</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="<?php echo base_url('public/assets/user/img/team-1.jpg'); ?>" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i style="color: #D7B56D !important" class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="https://www.youtube.com/channel/UCI2uZseSfDPpzY2N5Pi1DeA"><i style="color: #D7B56D !important" class="fab fa-youtube"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/xl.barbershop/?hl=de"><i style="color: #D7B56D !important" class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h5>Rəsul</h5>
                            <span style="color: #D7B56D !important" class="text-primary">Usta</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="<?php echo base_url('public/assets/user/img/team-2.jpg'); ?>" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i style="color: #D7B56D !important" class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="https://www.youtube.com/channel/UCI2uZseSfDPpzY2N5Pi1DeA"><i style="color: #D7B56D !important" class="fab fa-youtube"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/xl.barbershop/?hl=de"><i style="color: #D7B56D !important" class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h5>İbrahim</h5>
                            <span style="color: #D7B56D !important" class="text-primary">Usta</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid" src="<?php echo base_url('public/assets/user/img/team-3.jpg'); ?>" alt="">
                            <div class="team-social">
                                <a class="btn btn-square" href=""><i style="color: #D7B56D !important" class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href="https://www.youtube.com/channel/UCI2uZseSfDPpzY2N5Pi1DeA"><i style="color: #D7B56D !important" class="fab fa-youtube"></i></a>
                                <a class="btn btn-square" href="https://www.instagram.com/xl.barbershop/?hl=de"><i style="color: #D7B56D !important" class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-secondary text-center p-4">
                            <h5>Cəlal</h5>
                            <span style="color: #D7B56D !important" class="text-primary">Usta</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <?php $this->load->view("users/includes/Footer"); ?>
    <?php $this->load->view("users/includes/FooterScripts"); ?>

</body>

</html>