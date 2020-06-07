<!-- Customize Global Variable -->
<?php global $taxa; ?>

<?php get_header(); ?>
<!--================ End Header Area =================-->

<!--================ Start Home Banner Area =================-->
<section class="home_banner_area" style="background: url(<?php echo $taxa['homepage_banner_bg_img']['url']; ?>) no-repeat center center;">
    <div class="banner_inner">
        <div class="container">
            <div class="row fullscreen d-flex align-items-center justify-content-center">
                <div class="banner_content">
                    <p><?php bloginfo('description'); ?></p>
                    <h2><?php bloginfo('title'); ?></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End Home Banner Area =================-->

<!--================ Start Feature Area =================-->
<?php 
    if("$taxa[homepage_feature_on_off]" == 1){
        get_template_part('/temp-part/feature');
    }else{
        echo '';
    }
?>
<!--================ End Feature Area =================-->

<!--================ Start CTA Button Area =================-->
<?php 
    if("$taxa[homepage_cta_button_on_off]" == 1){
        get_template_part('/temp-part/cta-button');
    }else{
        echo '';
    }
?>
<!--================ End CTA Button Area =================-->

<!--================ Start Trip Package Area =================-->
<?php 
    if("$taxa[homepage_package_on_off]" == 1){
        get_template_part('/temp-part/package');
    }else{
        echo '';
    }
?>
<!--================ End Trip Package Area =================-->

<!--================ Start Popular Places Area =================-->
<?php 
    if("$taxa[homepage_popular_places_on_off]" == 1){
        get_template_part('/temp-part/popular-places');
    }else{
        echo '';
    }
?>
<!--================ End Popular Places Area =================-->

<!--================ Start Team Area =================-->
<?php 
    if("$taxa[homepage_team_on_off]" == 1){
        get_template_part('/temp-part/team');
    }else{
        echo '';
    }
?>
<!--================ End Team Area =================-->

<!--================ Start CTA Newsletter Area =================-->
<?php 
    if("$taxa[homepage_cta_newsletter_on_off]" == 1){
        get_template_part('/temp-part/cta-newsletter');
    }else{
        echo '';
    }
?>
<!--================ End CTA Newsletter Area =================-->

<!--================ Start Testimonials Area =================-->
<?php 
    if("$taxa[homepage_testimonials_on_off]" == 1){
        get_template_part('/temp-part/testimonials');
    }else{
        echo '';
    }
?>
<!--================ End Testimonials Area =================-->

<!--================ Start Blog Area =================-->
<?php 
    if("$taxa[homepage_blog_on_off]" == 1){
        get_template_part('/temp-part/homepage-blog');
    }else{
        echo '';
    }
?>
<!--================ End Blog Area =================-->

<!--================  Start Footer Area =================-->
<?php get_footer(); ?>