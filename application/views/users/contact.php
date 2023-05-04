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
            <h1 class="mb-3">Əlaqə</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="index.html">Ana səhifə</a></li>
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
                        <iframe class="google-map w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97258.77327201498!2d49.75888725565705!3d40.379230465844536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307dbd609a831f%3A0x40186b7c963475ca!2zMTQ1IE11cnR1emEgTXV4dGFyb3YsIEJha8SxIDEwMDksINCQ0LfQtdGA0LHQsNC50LTQttCw0L0!5e0!3m2!1sru!2s!4v1660018712167!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <?php $this->load->view("users/includes/Footer"); ?>
    <?php $this->load->view("users/includes/FooterScripts"); ?>

</body>

</html>