<?php
function add_css()
{
   wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css', false,'1.1','all');
   wp_enqueue_style( 'main');
   wp_register_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css', false,'1.1','all');
   wp_enqueue_style( 'normalize');
   wp_register_style('fontawesome', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', false,'1.1','all');
   wp_enqueue_style( 'fontawesome');
   wp_register_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', false,'1.1','all');
   wp_enqueue_style( 'animate');
   wp_register_style('flaticon', get_template_directory_uri() . '/assets/font/flaticon.css', false,'1.1','all');
   wp_enqueue_style( 'flaticon');
   wp_register_style('nivoslider', get_template_directory_uri() . '/assets/vendor/slider/css/nivo-slider.css', false,'1.1','all');
   wp_enqueue_style( 'nivoslider');
   wp_register_style('owlcarousel', get_template_directory_uri() . '/assets/vendor/OwlCarousel/owl.carousel.min.css', false,'1.1','all');
   wp_enqueue_style( 'owlcarousel');
   wp_register_style('owlthemedefault', get_template_directory_uri() . '/assets/vendor/OwlCarousel/owl.theme.default.min.css', false,'1.1','all');
   wp_enqueue_style( 'owlthemedefault');
   wp_register_style('magnificpopup', get_template_directory_uri() . '/assets/css/magnific-popup.css', false,'1.1','all');
   wp_enqueue_style( 'magnificpopup');
   wp_register_style('select2', get_template_directory_uri() . '/assets/css/select2.min.css', false,'1.1','all');
   wp_enqueue_style( 'select2');
   wp_register_style('meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.min.css', false,'1.1','all');
   wp_enqueue_style( 'meanmenu');
   wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false,'1.1','all');
   wp_enqueue_style( 'bootstrap');
   wp_register_style('style', get_template_directory_uri() . './style.css', false,'1.1','all');
   wp_enqueue_style( 'style');

}
add_action('wp_enqueue_scripts', 'add_css');

function add_script()
{
   wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr-3.7.1.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'modernizr');
   wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'jquery');
   wp_register_script('plugins', get_template_directory_uri() . '/assets/js/plugins.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'plugins');
   wp_register_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'popper');
   wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'bootstrap');
   wp_register_script('jquerymeanmenu', get_template_directory_uri() . '/assets/js/jquery.meanmenu.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'jquerymeanmenu');
   wp_register_script('isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'isotope');
   wp_register_script('imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'imagesloaded');
   wp_register_script('jquerynivoslider', get_template_directory_uri() . '/assets/vendor/slider/js/jquery.nivo.slider.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'jquerynivoslider');
   wp_register_script('sliderhome', get_template_directory_uri() . '/assets/vendor/slider/home.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'sliderhome');
   wp_register_script('owlcarousel', get_template_directory_uri() . '/assets/vendor/OwlCarousel/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'owlcarousel');
   wp_register_script('jquerycounterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'jquerycounterup');
   wp_register_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'waypoints');
   wp_register_script('magnificpopup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'magnificpopup');
   wp_register_script('select2', get_template_directory_uri() . '/assets/js/select2.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'select2');
   wp_register_script('validator', get_template_directory_uri() . '/assets/js/validator.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'validator');
   wp_register_script('parallax', get_template_directory_uri() . '/assets/js/parallax.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'parallax');
   wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'main');
}
add_action('wp_enqueue_scripts', 'add_script');

add_theme_support( 'menus' );

function wpb_custom_new_menu() {
   register_nav_menu('custom-menu',__( 'Custom Menu' ));
 }
 add_action( 'init', 'wpb_custom_new_menu' );

function display_contact_form() {

	$validation_messages = [];
	$success_message = '';

	if ( isset( $_POST['contact_form'] ) ) {

		//Sanitize the data
		$full_name = isset( $_POST['full_name'] ) ? sanitize_text_field( $_POST['full_name'] ) : '';
		$email     = isset( $_POST['email'] ) ? sanitize_text_field( $_POST['email'] ) : '';
		$phone   = isset( $_POST['phone'] ) ? sanitize_textarea_field( $_POST['message'] ) : '';
		$address   = isset( $_POST['address'] ) ? sanitize_textarea_field( $_POST['address'] ) : '';
		$services   = isset( $_POST['services'] ) ? sanitize_textarea_field( $_POST['servicess'] ) : '';

		//Validate the data
		if ( strlen( $full_name ) === 0 ) {
			$validation_messages[] = esc_html__( 'Please enter a valid name.', 'emaroofing' );
		}

		if ( strlen( $email ) === 0 or
		     ! is_email( $email ) ) {
			$validation_messages[] = esc_html__( 'Please enter a valid email address.', 'emaroofing' );
		}

		if ( strlen( $phone ) === 0 ) {
			$validation_messages[] = esc_html__( 'Please enter a valid message.', 'emaroofing' );
		}

      if ( strlen( $address ) === 0 ) {
			$validation_messages[] = esc_html__( 'Please enter a valid message.', 'emaroofing' );
		}
      
      if ( strlen($services) === "Services" or strlen($services) === "0") {
         $validation_messages[] = esc_html__("Please select a service type.", 'emaroofing');
      }

		//Send an email to the WordPress administrator if there are no validation errors
		if ( empty( $validation_messages ) ) {

			$mail    = get_option( 'admin_email' );
			$subject = 'New message from ' . $full_name;
			$message = $phone . ' - The email address of the customer is: ' . $mail;

			wp_mail( $mail, $subject, $message );

			$success_message = esc_html__( 'Your message has been successfully sent.', 'emaroofing' );
		}

	}

	//Display the validation errors
	if ( ! empty( $validation_messages ) ) {
		foreach ( $validation_messages as $validation_message ) {
			echo '<div class="validation-message">' . esc_html( $validation_message ) . '</div>';
		}
	}

	//Display the success message
	if ( strlen( $success_message ) > 0 ) {
		echo '<div class="success-message">' . esc_html( $success_message ) . '</div>';
	}

	?>

    <!-- Echo a container used that will be used for the JavaScript validation -->
   <div id="validation-messages-container"></div>

   <form id="contact-form" class="contact-form-box" action="<?php echo esc_url( home_url( '/') ); ?>" method="post">
      <div class="row">
         <input type="hidden" name="contact_form">

         <div class="form-section col-12 form-group">
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
            <input type="submit" class="fw-btn-fill bg-Primary Text-textprimary" id="contact-form-submit" value="<?php echo esc_attr( 'Submit Now', 'emaroofing' ); ?>">
         </div>
      </div>
      <div class="form-response"></div>
    </form>

	<?php

}

add_shortcode( 'contact-form', 'display_contact_form' );