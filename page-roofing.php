<?php get_header("other"); ?>

<!-- Photo Gallery Start Here -->
<section class="project-wrap-layout2 bg-common" data-bg-image="img/project/project-bg.jpg">
    <div class="container">
        <div class="heading-layout1">
            <div class="item-subtitle">Photo Gallery by Service Category</div>
            <h2>Our Photo Callery</h2>
        </div>
        <div class="isotope-wrap">
            <div class="text-center">
                <div class="isotope-classes-tab isotop-btn-1">
                    <a class="current nav-item" data-filter="*">All</a>
                    <a class="nav-item" data-filter=".roofing">Roofing</a>
                    <a class="nav-item" data-filter=".siding">Siding</a>
                </div>
            </div>
            <div class="row featuredContainer" id="no-equal-gallery">
                <?php $images =& get_children( 'post_type=attachment&post_mime_type=image' ); ?>
                <?php foreach((array) $images as $attachment_id => $attachment): ?>
                    <div class="col-lg-4 col-md-6 col-12 no-equal-item roofing">
                        <div class="project-box-layout2">
                            <div class="item-img">
                                <?= wp_get_attachment_image( $attachment_id, [500, 400] ); ?>
                            </div>
                            <div class="item-content">
                                <div class="item-heading">
                                    <div class="item-subtitle">Roofing</div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- Photo Gallery End Here -->

<?php get_footer(); ?>