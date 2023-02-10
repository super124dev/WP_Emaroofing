<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EMA Roofing</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri().'/assets/img/favicon.png'; ?>">
    <?php wp_head(); ?>
</head>

<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->
    <!-- ScrollUp Start Here -->
    <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- ScrollUp End Here -->
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper">
        <!-- Add your site or application content here -->
        <!-- Header Area Start Here -->
        <header class="header">
            <div id="header-topbar" class="bg-accent pd-x-85">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="header-topbar-layout1">
                                <ul class="header-top-left">
                                    <li><i class="fas fa-envelope"></i>E-mail: roofit@gmail.com</li>
                                    <li><i class="far fa-clock"></i>Hours: Mon-Fri: 8.00 am - 7.00 pm</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex justify-content-end">
                            <div class="header-topbar-layout1">
                                <ul class="header-top-right">
                                    <li><i class="fas fa-phone-volume"></i>+ 847 276 3231</li>
                                    <li class="social-icon">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                        <a href="#"><i class="fab fa-yelp"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="rt-sticky-placeholder"></div>
            <div id="header-menu" class="header-menu menu-layout1 pd-x-85">
                <div class="container-fluid">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-2">
                            <div class="logo-area">
                                <a href="/" class="temp-logo">
                                    <img src="<?php echo get_template_directory_uri().'/assets/img/logo-dark.png'; ?>" alt="logo" class="img-fluid">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7 d-flex justify-content-end possition-static">
                           <nav id="dropdown" class="template-main-menu">
                                <?php
                                    wp_nav_menu( array( 'container' => 'ul', ));
                                ?>
                            </nav>
                        </div>
                        <div class="col-lg-3 d-flex justify-content-end">
                            <div class="header-action-layout1">
                                <ul>
                                    <li class="header-action-btn">
                                        <a href="#" class="item-btn">GET A FREE ESTIMATE</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>