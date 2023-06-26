<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('dashboard'); ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-grin-beam text-warning rotate-n-45"></i>
        </div>
        <div class="sidebar-brand-text mx-3">XL Admin</div>
        <div class="sidebar-brand-icon text-warning rotate-45">
            <i class="fas fa-grin-beam"></i>
        </div>
    </a>
    <hr class="sidebar-divider my-0">

    <style>
        .xl-text-dashboard {
            color: #fbc531 !important;
        }

        .xl-text-logo {
            color: #fd79a8 !important;
        }

        .xl-text-gallery {
            color: #20bf6b !important;
        }

        .xl-text-team {
            color: #2d98da !important;
        }

        .xl-text-about-us {
            color: #ced6e0 !important;
        }

        .xl-text-services {
            color: #cd6133 !important;
        }

        .xl-text-working-hours {
            color: #6a89cc !important;
        }

        .xl-text-price {
            color: #33d9b2 !important;
        }

        .xl-text-testimonial {
            color: #b8e994 !important;
        }
    </style>

    <!-- DASHBOARD MENU -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt xl-text-dashboard"></i>
            <span>Dashboard</span>
        </a>
    </li>
    <hr class="sidebar-divider my-0 mb-3">
    <div style="font-size:12px;" class="sidebar-heading">Content</div>

    <!-- LOGO -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('logo_create'); ?>">
            <i class="fas fa-fw fa-star xl-text-logo"></i>
            <span>Logo</span>
        </a>
    </li>

    <!-- HEADER VIDEO -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('header_lending_create'); ?>">
            <i class="fas fa-fw fa-image xl-text-gallery"></i>
            <span>Header Lending</span>
        </a>
    </li>

    <!-- TEAM MENU -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTeam" aria-expanded="true" aria-controls="collapseTeam">
            <i class="fas fa-fw fa-users xl-text-team"></i>
            <span>Team</span>
        </a>
        <div id="collapseTeam" class="collapse" aria-labelledby="headingTeam" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a href="<?php echo base_url('team_create'); ?>" style="font-size:14px; font-weight:bold;" class="collapse-item d-flex flex-row justify-content-start align-items-center">
                    <i style="font-size:16px;" class="fas fa-fw fa-plus mr-3"></i>Create
                </a>
                <a href="<?php echo base_url('team_list'); ?>" style="font-size:14px; font-weight:bold;" class="collapse-item d-flex flex-row justify-content-start align-items-center">
                    <i style="font-size:16px;" class="fas fa-fw fa-list mr-3"></i>List
                </a>
            </div>
        </div>
    </li>

    <!-- ABOUT_US MENU -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo base_url('about_us_create') ?>">
            <i class="fas fa-fw fa-address-card xl-text-about-us"></i>
            <span>About Us</span>
        </a>
    </li>

    <!-- SERVICES MENU -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseServices" aria-expanded="true" aria-controls="collapseServices">
            <i class="fas fa-fw fa-box xl-text-services"></i>
            <span>Services</span>
        </a>
        <div id="collapseServices" class="collapse" aria-labelledby="headingServices" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a href="<?php echo base_url('services_create'); ?>" style="font-size:14px; font-weight:bold;" class="collapse-item d-flex flex-row justify-content-start align-items-center">
                    <i style="font-size:16px;" class="fas fa-fw fa-plus mr-3"></i>Create
                </a>
                <a href="<?php echo base_url('services_list'); ?>" style="font-size:14px; font-weight:bold;" class="collapse-item d-flex flex-row justify-content-start align-items-center">
                    <i style="font-size:16px;" class="fas fa-fw fa-list mr-3"></i>List
                </a>
            </div>
        </div>
    </li>

    <!-- PRICE -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('price_create'); ?>">
            <i class="fas fa-money-bill-wave xl-text-price"></i>
            <span>Price</span>
        </a>
    </li>

    <!-- WORKING HOURS -->
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('working_hours_create'); ?>">
            <i class="fas fa-clock xl-text-working-hours"></i>
            <span>Working Hours</span>
        </a>
    </li>

    <!-- TESTIMONIAL -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTestimonial" aria-expanded="true" aria-controls="collapseTestimonial">
            <i class="fas fa-comment-dots xl-text-testimonial"></i>
            <span>Testimonial</span>
        </a>
        <div id="collapseTestimonial" class="collapse" aria-labelledby="headingTestimonial" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a href="<?php echo base_url('testimonial_create'); ?>" style="font-size:14px; font-weight:bold;" class="collapse-item d-flex flex-row justify-content-start align-items-center">
                    <i style="font-size:16px;" class="fas fa-fw fa-plus mr-3"></i>Create
                </a>
                <a href="<?php echo base_url('testimonial_list'); ?>" style="font-size:14px; font-weight:bold;" class="collapse-item d-flex flex-row justify-content-start align-items-center">
                    <i style="font-size:16px;" class="fas fa-fw fa-list mr-3"></i>List
                </a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- SIDEBAR TOGGLE -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>