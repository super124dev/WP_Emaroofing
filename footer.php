<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<footer class="footer-wrap-layout1">
            <div class="footer-top-wrap-layout1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-box-layout1">
                                <div class="footer-logo">
                                    <a href="index.html"><img src="<?php echo get_template_directory_uri().'/assets/img/logo-light.png'; ?>" alt="logo"/></a>
                                </div>
                                <p>EMA Builders, Inc. is proud to be a family owned and operated roofing company that has been established in Chicago since 1989.</p>
                                <ul class="footer-social">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-yelp"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-box-layout1">
                                <div class="footer-title">
                                    <h3>Quick Links</h3>
                                </div>
                                <div class="footer-menu-box">
                                    <ul class="footer-menu-list">
                                        <li>
                                            <a href="index.html">Home</a>
                                        </li>
                                        <li>
                                            <a href="about1.html">About Us</a>
                                        </li>
                                        <li>
                                            <a href="#">Services</a>
                                        </li>
                                        <li>
                                            <a href="#">Contact Us</a>
                                        </li>
                                    </ul>
                                    <ul class="footer-menu-list">
                                        <li>
                                            <a href="#">Metal Roofing</a>
                                        </li>
                                        <li>
                                            <a href="#">Gallery</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-box-layout1">
                                <div class="footer-title">
                                    <h3>Newsletter</h3>
                                </div>
                                <div class="footer-form-box">
                                    <p>Subscribe For Daily Latest News &amp; Updates</p>
                                    <form class="contact-form-box">
                                        <div class="row">
                                            <div class="col-12 form-group">
                                                <input type="email" placeholder="E-mail Address" class="form-control" name="name" data-error="Name field is required" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="col-12 form-group">
                                                <button type="submit" class="item-btn">Subscribe Now</button>
                                            </div>
                                        </div>
                                        <div class="form-response"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-wrap-layout1">
                <div class="copyright">Copyright 2019 by ema builders, Inc. | 1815 Monroe CT | Glenview , IL 60025 | ph. 847-276-3231 | fax 1-800-790-8397 | All rights reserved</div>
            </div>
        </footer>
        <!-- Footer Area End Here -->
        <?php wp_footer(); ?>
    </div>
</body>

</html>