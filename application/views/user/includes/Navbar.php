<nav class="navbar navbar-expand-lg bg-secondary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="<?php echo base_url('index'); ?>" class="navbar-brand ms-4 ms-lg-0">
        <img style="width: 90px; height: 90px !important" src="<?php echo base_url('public/user/assets/img/favicon.png'); ?>">
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <?php $segmentControl = $this->uri->segment(1); ?>
            <a href="<?php echo base_url('index'); ?>" class="nav-item nav-link <?php if ($segmentControl == 'index' || $segmentControl == '') { ?> active <?php } ?>">Ana səhifə</a>
            <a href="<?php echo base_url('about'); ?>" class="nav-item nav-link <?php if ($segmentControl == 'about') { ?> active <?php } ?>">Haqqımızda</a>
            <a href="<?php echo base_url('service'); ?>" class="nav-item nav-link <?php if ($segmentControl == 'service') { ?> active <?php } ?>">Xidmətlər</a>
            <a href="<?php echo base_url('gallery'); ?>" class="nav-item nav-link <?php if ($segmentControl == 'gallery') { ?> active <?php } ?>">Qalereya</a>
            <a href="<?php echo base_url('contact'); ?>" class="nav-item nav-link <?php if ($segmentControl == 'contact') { ?> active <?php } ?>">Əlaqə</a>
        </div>
    </div>
</nav>