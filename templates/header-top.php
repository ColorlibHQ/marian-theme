<?php
    $btn_txt = marian_opt( 'marian_header_top_btn_text' );
    $btn_url = marian_opt( 'marian_header_top_btn_url' );
?>
<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <strong>Hotel</b>
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->

<header>
    <!-- Header Start -->
    <div class="header-area header-sticky">
        <div class="main-header ">
            <div class="container">
                <div class="row align-items-center">
                    <!-- logo -->
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <?php echo marian_theme_logo();?>
                        </div>
                    </div>
                <div class="col-xl-8 col-lg-8">
                        <!-- main-menu -->
                        <div class="main-menu f-right d-none d-lg-block">
                            <nav>
                                <?php
                                if(has_nav_menu('primary-menu')) {
                                    wp_nav_menu(array(
                                        'menu'            => 'primary-menu',
                                        'theme_location'  => 'primary-menu',
                                        'menu_id'         => 'navigation',
                                        'container_class' => false,
                                        'container_id'    => false,
                                        'menu_class'      => false,
                                        'depth'           => 3,
                                        'walker'          => new marian_bootstrap_navwalker()
                                    ));
                                }
                                ?>
                            </nav>
                        </div>
                    </div>             
                    <div class="col-xl-2 col-lg-2">
                        <!-- header-btn -->
                        <?php
                            if ( $btn_txt ) {
                                echo '
                                <div class="header-btn">
                                    <a href="'.esc_url($btn_url).'" class="btn btn1 d-none d-lg-block ">'.esc_html($btn_txt).'</a>
                                </div>
                                ';
                            }
                        ?>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>