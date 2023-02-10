<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php bloginfo( 'name' ); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
            <div id="header-topbar" class="pd-b-25 pd-t-35">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="header-topbar-layout2">
                                <div class="phone-number"><i class="flaticon-call-answer"></i> + 847 276 3231</div>
                                <span>Call today for a free estimate.</span>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="logo-area">
                                <a href="/" class="temp-logo">
                                    <img src="<?php echo get_template_directory_uri().'/assets/img/logo-dark.png'; ?>" alt="logo" class="img-fluid"/>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5 d-flex justify-content-end">
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
            <div id="rt-sticky-placeholder"></div>
            <div id="header-menu" class="header-menu menu-layout3 bg-accent">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-12 d-flex justify-content-center possition-static">
                            <nav id="dropdown" class="template-main-menu">
                                <?php
                                    wp_nav_menu( array( 'container' => 'ul', ));
                                ?>
                            </nav>
                        </div>
                        <!-- <div class="col-lg-12 d-flex justify-content-center possition-static">
                           <nav id="dropdown" class="template-main-menu">
                                <ul>
                                   <li>
                                        <a href="#">HOME</a>
                                        <ul class="dropdown-menu-col-1">
                                            <li>
                                                <a href="index.html">Home Page 1</a>
                                            </li>
                                            <li>
                                                <a href="index2.html">Home Page 2</a>
                                            </li>
                                            <li>
                                                <a href="index3.html">Home Page 3</a>
                                            </li>
                                            <li>
                                                <a href="index4.html">Home Page 4</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="about1.html">ABOUT</a>
                                    </li>
                                    <li>
                                        <a href="#">SERVICES</a>
                                        <ul class="dropdown-menu-col-1">
                                            <li>
                                                <a href="service1.html">Services 1</a>
                                            </li>
                                            <li>
                                                <a href="service2.html">Services 2</a>
                                            </li>
                                            <li>
                                                <a href="service3.html">Services 3</a>
                                            </li>
                                            <li>
                                                <a href="single-service1.html">Single Services 1</a>
                                            </li>
                                            <li>
                                                <a href="single-service2.html">Single Services 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">BLOGS</a>
                                        <ul class="dropdown-menu-col-1">
                                            <li>
                                                <a href="blog1.html">Blog 1</a>
                                            </li>
                                            <li>
                                                <a href="blog2.html">Blog 2</a>
                                            </li>
                                            <li>
                                                <a href="blog3.html">Blog 3</a>
                                            </li>
                                            <li>
                                                <a href="single-blog1.html">Single Blog 1</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="possition-static hide-on-mobile-menu">
                                        <a href="#">PAGES</a>
                                        <div class="template-mega-menu">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="menu-ctg-title">Home</div>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="index.html">
                                                                    <i class="fas fa-home"></i>Home 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="index2.html">
                                                                    <i class="fas fa-home"></i>Home 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="index3.html">
                                                                    <i class="fas fa-home"></i>Home 3</a>
                                                            </li>
                                                            <li>
                                                                <a href="index4.html">
                                                                    <i class="fas fa-home"></i>Home 4</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="menu-ctg-title">Pages</div>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="project1.html">
                                                                    <i class="fas fa-handshake"></i>Projects 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="single-project1.html">
                                                                    <i class="fas fa-handshake"></i>Single Project 1</a>
                                                            </li>
                                                            <li>
                                                                <a href="single-project2.html">
                                                                    <i class="fas fa-handshake"></i>Single Porject 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="team1.html">
                                                                    <i class="fas fa-user-tie"></i>Team 1</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="menu-ctg-title">Pages</div>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="team2.html">
                                                                    <i class="fas fa-user-tie"></i>Team 2</a>
                                                            </li>
                                                            <li>
                                                                <a href="single-team1.html">
                                                                    <i class="fas fa-user-tie"></i>Single Team</a>
                                                            </li>
                                                            <li>
                                                                <a href="shop1.html">
                                                                    <i class="fas fa-cart-plus"></i>Shop</a>
                                                            </li>
                                                            <li>
                                                                <a href="single-product.html">
                                                                    <i class="fas fa-cart-plus"></i>Single Product</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="menu-ctg-title">Pages</div>
                                                        <ul class="sub-menu">
                                                            <li>
                                                                <a href="faq.html">
                                                                    <i class="fas fa-chalkboard-teacher"></i>Faq Page</a>
                                                            </li>
                                                            <li>
                                                                <a href="coming-soon.html">
                                                                    <i class="fas fa-spinner"></i>Coming Soon</a>
                                                            </li>
                                                            <li>
                                                                <a href="404.html">
                                                                    <i class="fas fa-exclamation-triangle"></i>404 Error</a>
                                                            </li>
                                                            <li>
                                                                <a href="contact.html">
                                                                    <i class="far fa-address-book"></i>Contact</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="hide-on-desktop-menu">
                                        <a href="#">Pages</a>
                                        <ul>
                                            <li>
                                                <a href="about1.html">About</a>
                                            </li>
                                            <li>
                                                <a href="service1.html">Services</a>
                                            </li>
                                            <li>
                                                <a href="project1.html">Project</a>
                                            </li>
                                            <li>
                                                <a href="404.html">404 Error</a>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html">CONTACT</a>
                                    </li>
                                </ul>
                            </nav>
                        </div> -->
                    </div>
                </div>
            </div>
        </header>