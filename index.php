<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
	$validation_messages = [];
	$success_message = '';

	if ( isset( $_POST['contact_form'] ) ) {
        

		//Sanitize the data
		$full_name = isset( $_POST['full_name'] ) ? sanitize_text_field( $_POST['full_name'] ) : '';
		$email     = isset( $_POST['email'] ) ? sanitize_text_field( $_POST['email'] ) : '';
		$phone   = isset( $_POST['phone'] ) ? sanitize_textarea_field( $_POST['phone'] ) : '';
		$address   = isset( $_POST['address'] ) ? sanitize_textarea_field( $_POST['address'] ) : '';
		$services   = isset( $_POST['services'] ) ? sanitize_textarea_field( $_POST['services'] ) : '';

		//Validate the data
		if ( strlen( $full_name ) === 0 ) {
            $validation_messages[] = esc_html__( 'Please enter a valid name.', 'emaroofing' );
		}
        
		if ( strlen( $email ) === 0 or
        ! is_email( $email ) ) {
            $validation_messages[] = esc_html__( 'Please enter a valid email address.', 'emaroofing' );
		}
        
		if ( strlen( $phone ) === 0 ) {
			$validation_messages[] = esc_html__( 'Please enter a valid phone.', 'emaroofing' );
		}

      if ( strlen( $address ) === 0 ) {
			$validation_messages[] = esc_html__( 'Please enter a valid message.', 'emaroofing' );
		}
      
        // var_dump(empty($validation_messages));
    //   if ( strlen($services) === "Services" or strlen($services) === "0") {
    //      $validation_messages[] = esc_html__("Please select a service type.", 'emaroofing');
    //   }
      
		//Send an email to the WordPress administrator if there are no validation errors
		if ( empty( $validation_messages ) ) {
            
			$mail    = get_option( 'admin_email' );
			$subject = 'New message from ' . $full_name;
			$message = $phone . ' - The email address of the customer is: ' . $mail;

			wp_mail( $mail, $subject, $message );

			$success_message = esc_html__( 'Your message has been successfully sent.', 'emaroofing' );
            echo $success_message;
        }

	}
?>

<div class="slider-area slider-layout2">
            <div class="bend niceties preview-1">
                <div id="ensign-nivoslider-4" class="slides">
                    <img src="<?php echo get_template_directory_uri().'/assets/img/slider/slide3-1.jpg'; ?>" alt="slider" title="#slider-direction-1"/>
                    <img src="<?php echo get_template_directory_uri().'/assets/img/slider/slide3-2.jpg'; ?>" alt="slider" title="#slider-direction-2"/>
                    <img src="<?php echo get_template_directory_uri().'/assets/img/slider/slide3-3.jpg'; ?>" alt="slider" title="#slider-direction-3"/>
                    <img src="<?php echo get_template_directory_uri().'/assets/img/slider/slide3-4.jpg'; ?>" alt="slider" title="#slider-direction-4"/>
                </div>
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-1">
                        <div class="text-left title-container s-tb-c">
                            <div class="container">
                                <div class="slider-big-text text-light">EMA Builders</div>
                                <div class="slider-paragraph text-light" style="font-size: 30px;">Roofing Constructor</div>
                                <div class="slider-paragraph text-light">EMA Builders is proud to serve as your local roofing contractor, offering high quality work, superior customer service, and affordable prices to all of our customers and clients.</div>
                                <div class="slider-btn-area">
                                    <a href="#" class="item-btn-ghost">Get A Free Estimate
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider-direction-2" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-2">
                        <div class="text-left title-container s-tb-c">
                            <div class="container">
                            <div class="slider-big-text text-light">EMA Builders</div>
                                <div class="slider-paragraph text-light" style="font-size: 30px;">Roofing Constructor</div>
                                <div class="slider-paragraph text-light">EMA Builders is proud to serve as your local roofing contractor, offering high quality work, superior customer service, and affordable prices to all of our customers and clients.</div>
                                <div class="slider-btn-area">
                                    <a href="#" class="item-btn-ghost">Get A Free Estimate
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider-direction-3" class="t-cn slider-direction">
                    <div class="slider-content s-tb slide-3">
                        <div class="text-left title-container s-tb-c">
                            <div class="container">
                            <div class="slider-big-text text-light">EMA Builders</div>
                                <div class="slider-paragraph text-light" style="font-size: 30px;">Roofing Constructor</div>
                                <div class="slider-paragraph text-light">EMA Builders is proud to serve as your local roofing contractor, offering high quality work, superior customer service, and affordable prices to all of our customers and clients.</div>
                                <div class="slider-btn-area">
                                    <a href="#" class="item-btn-ghost">Get A Free Estimate
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-box-form">
                <div class="about-box-layout3">
                    <div class="item-heading">
                        <h3 class="item-title">Get An Estimate</h3>
                        <p>Need to know how much your cost?</p>
                    </div>
                    <form id="contact-form" class="contact-form-box" action="<?php echo esc_url( home_url('/')); ?>" method="post">
                        <div class="row">
                            <input type="hidden" name="contact_form">

                            <div class="form-section col-12 form-group">
                                <!-- <label for="full-name"><?php echo esc_html( 'Full Name', 'emaroofing' ); ?></label> -->
                                <input type="text" id="full-name" placeholder="<?php echo esc_html( 'Full Name', 'emaroofing' ); ?>" name="full_name" class="form-control" data-error="Name field is required" required>
                            </div>
                            <div class="form-section col-12 form-group">
                                <!-- <label for="email"><?php echo esc_html( 'Email', 'emaroofing' ); ?></label> -->
                                <input type="text" id="email" placeholder="<?php echo esc_html( 'Email', 'emaroofing' ); ?>" name="email" class="form-control" data-error="Email field is required" required>
                            </div>

                            <div class="form-section col-12 form-group">
                                <!-- <label for="phone"><?php echo esc_html( 'Phone', 'emaroofing' ); ?></label> -->
                                <input type="text" id="phone" placeholder="<?php echo esc_html( 'Phone', 'emaroofing' ); ?>" name="phone" class="form-control" data-error="Phone field is required" required>
                            </div>

                            <div class="form-section col-12 form-group">
                                <!-- <label for="address"><?php echo esc_html( 'Address', 'emaroofing' ); ?></label> -->
                                <input type="text" id="address" placeholder="<?php echo esc_html( 'Address', 'emaroofing' ); ?>" name="address" class="form-control" data-error="Address field is required" required>
                            </div>

                            <div class="form-section col-12 form-group">
                                <select class="select2" name="services" id="services">
                                    <option value="0">Services</option>
                                    <option value="Metal Roofing">Metal Roofing</option>
                                    <option value="Till Roofing">Till Roofing</option>
                                    <option value="Roofing">Roofing</option>
                                    <option value="Asphalt Shingles">Asphalt Shingles</option>
                                    <option value="Cedar Shake Roof">Cedar Shake Roof</option>
                                    <option value="Low Slope / Flat Roofing">Low Slope / Flat Roofing</option>
                                    <option value="Tuckpointing">Tuckpointing</option>
                                    <option value="Siding">Siding</option>
                                    <option value="Windows">Windows</option>
                                    <option value="Soffit And Fascia">Soffit And Fascia</option>
                                    <option value="Gutters">Gutters</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-12 form-group">
                                <input class="fw-btn-fill bg-Primary Text-textprimary" type="submit" id="contact-form-submit" value="<?php echo esc_attr( 'Submit Now', 'emaroofing' ); ?>">
                            </div>
                            <!-- <div class="col-12 form-group">
                                <button type="submit" class="fw-btn-fill bg-Primary text-textprimary">SUBMIT NOW<i class="fas fa-chevron-right"></i></button>
                            </div> -->
                        </div>
                        <div class="form-response"></div>
                    </form>
                    <!-- <form class="contact-form-box" id="contact-form-3">
                        <div class="row"> -->
                            <!-- <div class="col-12 form-group">
                                <input type="text" placeholder="Name*" class="form-control" name="name" data-error="Name field is required" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-12 form-group">
                                <input type="email" placeholder="E-mail*" class="form-control" name="email" data-error="email field is required" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="col-12 form-group">
                                <input type="text" placeholder="Phone*" class="form-control" name="phone" data-error="Phone field is required" required>
                                <div class="help-block with-errors"></div> -->
                            <!-- </div>
                            <div class="col-12 form-group">
                                <select class="select2" name="city">
                                    <option value="0">City</option>
                                    <option value="Australia">Australia</option>
                                    <option value="England">England</option>
                                    <option value="London">London</option>
                                    <option value="United States">United States</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div> -->
                            <!-- <div class="col-12 form-group">
                                <select class="select2" name="subject">
                                    <option value="0">Interested In</option>
                                    <option value="Australia">Australia</option>
                                    <option value="England">England</option>
                                    <option value="London">London</option>
                                    <option value="United States">United States</option>
                                </select>
                                <div class="help-block with-errors"></div>
                            </div> -->
                            <!-- <div class="col-12 form-group">
                                <button type="submit" class="fw-btn-fill bg-Primary text-textprimary">SUBMIT NOW<i class="fas fa-chevron-right"></i></button>
                            </div>
                        </div>
                        <div class="form-response"></div>
                    </form> -->
                </div>
            </div>
        </div>
        <!-- Slider Area End Here -->
        <!-- About Us Area Start Here -->
        <section class="about-wrap-layout2 bg-shape-6">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-12">
                        <div class="about-box-layout2">
                            <!-- <div class="item-subtitle">Why Choose Us</div> -->
                            <h2 class="item-title">Our Customers Come First</h2>
                            <p>At EMA Builders we care about meeting and exceeding your needs more than we care about making money, which is why all our work is guaranteed to meet your expectations and it is also why we go above and beyond each and every time.

As a licensed, insured and bonded roofing company, we enjoy working closely with our customers to ensure they get the quality and excellence they deserve. We provide honest feedback and up to date information while exploring all possibilities and options so you can make the best decision. If you have any questions or concerns during any stage of the process, you can feel free to talk to any of our friendly staff members and they will take all the time you need to ensure you feel comfortable with everything going on with your roofing project. This attention to detail ensures a hassle-free experience in every facet of sales and service covering a multitude of residential construction projects.

Roofing contractor - EMA Builders installs: Shingle Roof, Wood Cedar Shakes, Low Slope/Flat Roofing, and more! Contact us today to schedule your consultation and review and to take the first step towards a new roof for your home or business!</p>
                            <div class="item-award">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="item-img">
                                            <img src="<?php echo get_template_directory_uri().'/assets/img/about/award.png'; ?>" alt="Photo"/>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="item-img">
                                            <img src="<?php echo get_template_directory_uri().'/assets/img/about/award1.png'; ?>" alt="Photo"/>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="item-img">
                                            <img src="<?php echo get_template_directory_uri().'/assets/img/about/award2.png'; ?>" alt="Photo"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-12 about-box-layout7">
                        <div class="item-img">
                            <img src="<?php echo get_template_directory_uri().'/assets/img/about/about4.png'; ?>" alt="About Us"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Area End Here -->
        <!-- Service Area Start Here -->
        <section class="service-wrap-layout4 bg-shape-5">
            <div class="container">
                <div class="heading-layout1 heading-light">
                    <div class="item-subtitle">What We Do</div>
                    <h2>Our Providing Services</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="service-box-layout4">
                            <div class="item-img">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/service/service8.jpg'; ?>" alt="service"/>
                            </div>
                            <div class="item-content">
                                <h3 class="item-title"><a href="single-service1.html">Roof Repair</a></h3>
                                <p>This theme does everything could are possibly only beautifully.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="service-box-layout4">
                            <div class="item-img">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/service/service9.jpg'; ?>" alt="service"/>
                            </div>
                            <div class="item-content">
                                <h3 class="item-title"><a href="single-service1.html">Siding</a></h3>
                                <p>This theme does everything could are possibly only beautifully.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="service-box-layout4">
                            <div class="item-img">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/service/service10.jpg'; ?>" alt="service"/>
                            </div>
                            <div class="item-content">
                                <h3 class="item-title"><a href="single-service1.html">Insulation</a></h3>
                                <p>This theme does everything could are possibly only beautifully.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="service-box-layout4">
                            <div class="item-img">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/service/service11.jpg'; ?>" alt="service"/>
                            </div>
                            <div class="item-content">
                                <h3 class="item-title"><a href="single-service1.html">Gutters</a></h3>
                                <p>This theme does everything could are possibly only beautifully.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="service-box-layout4">
                            <div class="item-img">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/service/service12.jpg'; ?>" alt="service"/>
                            </div>
                            <div class="item-content">
                                <h3 class="item-title"><a href="single-service1.html">Replacement</a></h3>
                                <p>This theme does everything could are possibly only beautifully.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="service-box-layout4">
                            <div class="item-img">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/service/service13.jpg'; ?>" alt="service"/>
                            </div>
                            <div class="item-content">
                                <h3 class="item-title"><a href="single-service1.html">Inspection</a></h3>
                                <p>This theme does everything could are possibly only beautifully.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service Area End Here -->
        <!-- About Area Start Here -->
        <section class="about-wrap-layout5">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-11 col-12">
                        <div class="about-box-layout8">
                            <div class="item-content">
                                <h2 class="item-title">We Have Experienced  Working People</h2>
                                <p>Bhen an unknown printer took a galley of type and are scrambled it to make a type 
                                    specimen book. It haeys urvived notbut also the leap electronic type setting remaining 
                                    essentially.Bhen an unknown printer took a galley of type and are scrambled it to make 
                                    a type specnotbut also the leap electronic.</p>
                                <ul class="list-item">
                                    <li><i class="fas fa-check"></i>Expert &amp; Professional Engineers</li>
                                    <li><i class="fas fa-check"></i>We are Award Winning Company</li>
                                    <li><i class="fas fa-check"></i>Fully Satisfaction Guarantee</li>
                                    <li><i class="fas fa-check"></i>35 + Successfull Projects done</li>

                                </ul>
                            </div>
                            <div class="item-img">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/about/about3.jpg'; ?>" alt="About"/>
                                <div class="item-icon">
                                    <a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=1iIZeIy7TqM">
                                        <i class="flaticon-play-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End Here -->
        <!-- Project Area Start Here -->
        <section class="project-wrap-layout3">
            <div class="project-box-layout3">
                <div class="heading-layout1">
                    <div class="item-subtitle">Working Projects</div>
                    <h2>Our Latest Projects</h2>
                </div>
                <div class="rc-carousel nav-control-layout2" data-loop="true" data-center="true" data-items="10" data-margin="50"
                    data-autoplay="false" data-autoplay-timeout="3000" data-smart-speed="1000" data-dots="false"
                    data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
                    data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false"
                    data-r-small="3" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3"
                    data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true"
                    data-r-large-dots="false" data-r-extra-large="4" data-r-extra-large-nav="true"
                    data-r-extra-large-dots="false">
                    <div class="project-single-content">
                        <div class="item-img">
                            <img src="<?php echo get_template_directory_uri().'/assets/img/project/project13.jpg'; ?>" alt="Thumbnail"/>
                        </div>
                        <div class="item-content">
                            <div class="item-heading">
                                <h3 class="item-title"><a href="single-project1.html">Commercial Roofing</a></h3>
                                <div class="item-tag">
                                    <a href="#">Construction,</a>
                                    <a href="#">Siding</a>
                                </div>
                            </div>
                            <a href="single-project1.html" class="btn-fill-md bg-textprimary text-primarytext">DETAILS</a>
                        </div>
                    </div>
                    <div class="project-single-content">
                        <div class="item-img">
                            <img src="<?php echo get_template_directory_uri().'/assets/img/project/project14.jpg'; ?>" alt="Thumbnail"/>
                        </div>
                        <div class="item-content">
                            <div class="item-heading">
                                <h3 class="item-title"><a href="single-project1.html">Residential Roofing</a></h3>
                                <div class="item-tag">
                                    <a href="#">Construction,</a>
                                    <a href="#">Siding</a>
                                </div>
                            </div>
                            <a href="single-project1.html" class="btn-fill-md bg-textprimary text-primarytext">DETAILS</a>
                        </div>
                    </div>
                    <div class="project-single-content">
                        <div class="item-img">
                            <img src="<?php echo get_template_directory_uri().'/assets/img/project/project15.jpg'; ?>" alt="Thumbnail"/>
                        </div>
                        <div class="item-content">
                            <div class="item-heading">
                                <h3 class="item-title"><a href="single-project1.html">Residential Roofing</a></h3>
                                <div class="item-tag">
                                    <a href="#">Construction,</a>
                                    <a href="#">Siding</a>
                                </div>
                            </div>
                            <a href="single-project1.html" class="btn-fill-md bg-textprimary text-primarytext">DETAILS</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Project Area End Here -->
        <!-- Call To Action Area Start Here -->
        <section class="action-wrap-layout1 bg-common" data-bg-image="<?php echo get_template_directory_uri().'/assets/img/figure/banner-shape.png'; ?>">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <div class="action-box-layout1">
                            <h2 class="item-title">Get Your Roofing Project Started Today!</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex justify-content-lg-end justify-content-center">
                        <div class="action-box-layout1">
                        <a href="#" class="btn-fill-xl box-shadow bg-textprimary text-accent">GET A QUOTE<i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call To Action Area End Here -->
        <!-- Progress Area Start Here -->
        <section class="progress-wrap-layout2  parallax-window" data-parallax="scroll" ?>">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="progress-box-layout1">
                            <div class="progress-content">
                                <div class="item-icon">
                                    <i class="flaticon-apartment"></i>
                                </div>
                                <div class="item-content">
                                    <div class="counter count-number" data-num="1050">1050</div>
                                    <div class="count-title">Residential Projects</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="progress-box-layout1">
                            <div class="progress-content">
                                <div class="item-icon">
                                    <i class="flaticon-industry"></i>
                                </div>
                                <div class="item-content">
                                    <div class="counter count-number" data-num="1250">1250</div>
                                    <div class="count-title">Commertial Projects</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="progress-box-layout1">
                            <div class="progress-content">
                                <div class="item-icon">
                                    <i class="flaticon-helmet"></i>
                                </div>
                                <div class="item-content">
                                    <div class="counter count-number" data-num="650">650</div>
                                    <div class="count-title">Hard Working People</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="progress-box-layout1">
                            <div class="progress-content">
                                <div class="item-icon">
                                    <i class="flaticon-happy"></i>
                                </div>
                                <div class="item-content">
                                    <div class="counter count-number" data-num="3659">3659</div>
                                    <div class="count-title">Our Satisfied Clinets</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Progress Area End Here -->
        <!-- Testimonial Area Start Here -->
        <section class="testimonial-wrap-layout1 bg-aash bg-common" data-bg-image="<?php echo get_template_directory_uri().'/assets/img/figure/bg-banner.png'; ?>">
            <div class="container">
                <div class="heading-layout1">
                    <div class="item-subtitle">Testimonials</div>
                    <h2>Valuable Clients Reviews</h2>
                </div>
                <div class="rc-carousel dot-control-layout1" data-loop="true" data-items="10" data-margin="30"
                data-autoplay="false" data-autoplay-timeout="3000" data-smart-speed="1000" data-dots="true"
                data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false"
                data-r-x-small-dots="true" data-r-x-medium="1" data-r-x-medium-nav="false" data-r-x-medium-dots="true"
                data-r-small="1" data-r-small-nav="false" data-r-small-dots="true" data-r-medium="2"
                data-r-medium-nav="false" data-r-medium-dots="true" data-r-large="2" data-r-large-nav="false"
                data-r-large-dots="true" data-r-extra-large="2" data-r-extra-large-nav="false"
                data-r-extra-large-dots="true">
                    <div class="testimonial-box-layout1 bg-textprimary">
                        <div class="media media-none--xs">
                            <div class="item-img">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/figure/testimonial.jpg'; ?>" alt="feedback" class="media-img-auto"/>
                            </div>
                            <div class="media-body">
                                <h3 class="item-title">Mark Steven</h3>
                                <div class="item-subtitle">Architecture</div>
                                <ul class="item-rating">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p>“ Wimply dummy text of the printing and typesetting industry Lorem Ipsum has been 
                            the in printing and type setting indus tryprinting and tprinting and type setting 
                            industry ”</p>
                    </div>
                    <div class="testimonial-box-layout1 bg-textprimary">
                        <div class="media media-none--xs">
                            <div class="item-img">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/figure/testimonial1.jpg'; ?>" alt="feedback" class="media-img-auto"/>
                            </div>
                            <div class="media-body">
                                <h3 class="item-title">Alexandrio Rojo</h3>
                                <div class="item-subtitle">Architecture</div>
                                <ul class="item-rating">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p>“ Wimply dummy text of the printing and typesetting industry Lorem Ipsum has been 
                            the in printing and type setting indus tryprinting and tprinting and type setting 
                            industry ”</p>
                    </div>
                    <div class="testimonial-box-layout1 bg-textprimary">
                        <div class="media media-none--xs">
                            <div class="item-img">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/figure/testimonial.jpg'; ?>" alt="feedback" class="media-img-auto"/>
                            </div>
                            <div class="media-body">
                                <h3 class="item-title">Mark Steven</h3>
                                <div class="item-subtitle">Architecture</div>
                                <ul class="item-rating">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p>“ Wimply dummy text of the printing and typesetting industry Lorem Ipsum has been 
                            the in printing and type setting indus tryprinting and tprinting and type setting 
                            industry ”</p>
                    </div>
                    <div class="testimonial-box-layout1 bg-textprimary">
                        <div class="media media-none--xs">
                            <div class="item-img">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/figure/testimonial1.jpg'; ?>" alt="feedback" class="media-img-auto"/>
                            </div>
                            <div class="media-body">
                                <h3 class="item-title">Alexandrio Rojo</h3>
                                <div class="item-subtitle">Architecture</div>
                                <ul class="item-rating">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p>“ Wimply dummy text of the printing and typesetting industry Lorem Ipsum has been 
                            the in printing and type setting indus tryprinting and tprinting and type setting 
                            industry ”</p>
                    </div>
                    <div class="testimonial-box-layout1 bg-textprimary">
                        <div class="media media-none--xs">
                            <div class="item-img">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/figure/testimonial.jpg'; ?>" alt="feedback" class="media-img-auto"/>
                            </div>
                            <div class="media-body">
                                <h3 class="item-title">Mark Steven</h3>
                                <div class="item-subtitle">Architecture</div>
                                <ul class="item-rating">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p>“ Wimply dummy text of the printing and typesetting industry Lorem Ipsum has been 
                            the in printing and type setting indus tryprinting and tprinting and type setting 
                            industry ”</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Area End Here -->
        <!-- Blog Area Start Here -->
        <section class="blog-wrap-layout3">
            <div class="container">
                <div class="heading-layout1">
                    <div class="item-subtitle">What’s New Things</div>
                    <h2>Latest News &amp; Updates</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="blog-box-layout3">
                            <div class="item-img">
                               <a href="single-blog1.html"><img src="<?php echo get_template_directory_uri().'/assets/img/blog/blog5.jpg'; ?>" alt="blog"/></a>
                               <div class="top-item">
                                    <div class="item-date">
                                        <span class="days">27</span>
                                        <span class="month">APR</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <h3 class="item-title"><a href="single-blog1.html">Many important area brands  given search 2019</a></h3>
                                <ul class="entry-meta">
                                    <li>by <a href="#">Lucas Adrone</a></li>
                                    <li>Comments: 0</li>
                                </ul>
                                <p>Borem ipsum dolor sit amet consec aretur adipiscing incididunt dolore.Borem ipsum dolor sit amet consec.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="blog-box-layout3">
                            <div class="item-img">
                               <a href="single-blog1.html"><img src="<?php echo get_template_directory_uri().'/assets/img/blog/blog6.jpg'; ?>" alt="blog"/></a>
                               <div class="top-item">
                                    <div class="item-date">
                                        <span class="days">27</span>
                                        <span class="month">APR</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <h3 class="item-title"><a href="single-blog1.html">Many important area brands  given search 2019</a></h3>
                                <ul class="entry-meta">
                                    <li>by <a href="#">Lucas Adrone</a></li>
                                    <li>Comments: 0</li>
                                </ul>
                                <p>Borem ipsum dolor sit amet consec aretur adipiscing incididunt dolore.Borem ipsum dolor sit amet consec.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12 d-block d-md-none d-lg-block">
                        <div class="blog-box-layout3">
                            <div class="item-img">
                               <a href="single-blog1.html"><img src="<?php echo get_template_directory_uri().'/assets/img/blog/blog7.jpg'; ?>" alt="blog"/></a>
                               <div class="top-item">
                                    <div class="item-date">
                                        <span class="days">27</span>
                                        <span class="month">APR</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <h3 class="item-title"><a href="single-blog1.html">Many important area brands  given search 2019</a></h3>
                                <ul class="entry-meta">
                                    <li>by <a href="#">Lucas Adrone</a></li>
                                    <li>Comments: 0</li>
                                </ul>
                                <p>Borem ipsum dolor sit amet consec aretur adipiscing incididunt dolore.Borem ipsum dolor sit amet consec.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End Here -->
        <!-- Brand Area Start Here -->
        <section class="brand-wrap-layout2">
            <div class="container">
                <div class="rc-carousel nav-control-layout1" data-loop="true" data-items="10" data-margin="30"
                data-autoplay="true" data-autoplay-timeout="3000" data-smart-speed="1000" data-dots="false"
                data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
                data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false"
                data-r-small="3" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3"
                data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true"
                data-r-large-dots="false" data-r-extra-large="4" data-r-extra-large-nav="true"
                data-r-extra-large-dots="false">
                    <div class="brand-box-layout2">
                        <div class="item-img">
                            <img src="<?php echo get_template_directory_uri().'/assets/img/brand/brand1.png'; ?>" alt="Brand"/>
                        </div>
                    </div>
                    <div class="brand-box-layout2">
                        <div class="item-img">
                            <img src="<?php echo get_template_directory_uri().'/assets/img/brand/brand2.png'; ?>" alt="Brand"/>
                        </div>
                    </div>
                    <div class="brand-box-layout2">
                        <div class="item-img">
                            <img src="<?php echo get_template_directory_uri().'/assets/img/brand/brand3.png'; ?>" alt="Brand"/>
                        </div>
                    </div>
                    <div class="brand-box-layout2">
                        <div class="item-img">
                            <img src="<?php echo get_template_directory_uri().'/assets/img/brand/brand4.png'; ?>" alt="Brand"/>
                        </div>
                    </div>
                    <div class="brand-box-layout2">
                        <div class="item-img">
                            <img src="<?php echo get_template_directory_uri().'/assets/img/brand/brand5.png'; ?>" alt="Brand"/>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>
