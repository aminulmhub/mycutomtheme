        <!-- Start Hero Section -->
        <section id="home" class="hero">
            <div class="container">
                <div class="row g-4 g-lg-5 align-items-center">
                    <div class="order-2 order-lg-1 col-lg-7">
                        <div class="content">
                            <div class="inner">
                                <span class="subtitle">Welcome to my world</span>
                                <h1 class="title">Hi, I'm <span class="name"><?php echo get_theme_mod('portfolio_user'); ?> <br></span>
                                    <!-- <span id="mySkill"></span> -->
                                    <span><?php echo get_theme_mod('portfolio_proffession'); ?></span>
                                </h1>

                                <div>
                                    <p class="description"><?php echo get_theme_mod('portfolio_user_description'); ?></p>
                                </div>
                            </div>
                            <div class="row g-4 g-sm-5 row-cols-1 row-cols-sm-2">
                                <div class="col">
                                    <!-- Social Link -->
                                    <div class="social-share-inner">
                                        <span class="title">find with me</span>
                                        <ul class="social-share d-flex">
                                            <li>
                                                <a href="<?php echo get_theme_mod('facebook_link'); ?>" class="shade_box btn_primary">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_theme_mod('instagram_link'); ?>" class="shade_box btn_primary">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="<?php echo get_theme_mod('linkedin_link'); ?>" class="shade_box btn_primary">
                                                    <i class="fa-brands fa-linkedin-in"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="order-1 order-lg-2 col-lg-5">
                        <div class="thumbnail">
                            <div class="inner">
                                <img src="<?php echo get_theme_mod('banner_img'); ?>" alt="Personal Portfolio Images" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Hero Section -->