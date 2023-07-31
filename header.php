<!-- Start Header -->
<header class="template-header <?php echo get_theme_mod('menu_position'); ?>">
    <div class="template-navigation">
        <div class="nav-overlay"></div>
        <div class="container-fluid p-0">
            <div class="template-menu">

                <!-- Template Logo -->
                <div class="template-branding">
                    <a href="<?php echo home_url(); ?>" class="template-logo">
                        <img src="<?php echo get_theme_mod('header_logo'); ?>" alt="Site Logo" />
                    </a>
                </div>

                <div class="nav-menu">
                    <div class="d-xl-none">
                        <div class="d-flex align-items-center justify-content-between">
                            <!-- sidebar logo -->
                            <div class="sidebar-logo">
                                <a href="<?php echo home_url(); ?>" class="template-logo">
                                    <img src="<?php echo get_theme_mod('header_logo') ?>" alt="Site Logo" />
                                </a>
                            </div>

                            <!-- Navbar Close -->
                            <div class="navbar-close shade_box btn_primary rounded-circle">
                                <i class="fa-solid fa-angles-left"></i>
                            </div>
                        </div>
                        <p class="m-0 border-bottom my-4 pb-4">
                            <?php echo get_theme_mod('short_bio'); ?>
                        </p>
                    </div>

                    <!-- Nav Menu -->
                    <nav class="main-menu">
                        <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id' => 'main_menu')); ?>
                    </nav>

                    <!-- Social Link -->
                    <div class="d-xl-none social_links_wrap">
                        <span class="sub_title">Find with me</span>
                        <div class="social_links">
                            <a href="<?php echo get_theme_mod('facebook_link'); ?>" class="shade_box btn_primary">
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="<?php echo get_theme_mod('instagram_link'); ?>" class="shade_box btn_primary">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                            <a href="<?php echo get_theme_mod('linkedin_link'); ?>" class="shade_box btn_primary">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="nav-right">
                    <div class="d-none d-xl-block">
                        <a href="#" class="btn_primary shade_box btn_cta">Buy Now</a>
                    </div>
                    <ul class="d-flex align-items-center m-0">
                        <li class="nav-toggle-btn">
                            <div class="navbar-toggler">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- End Header -->