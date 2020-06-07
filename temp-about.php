<?php
/*
    Template Name: About Template
*/

get_header(); ?>
<!--================ End Header Area =================-->

<!--================ start Page Banner Area =================-->
<?php get_template_part('/temp-part/page-banner'); ?>
<!--================ End Page Banner Area =================-->

<!--================ Start About Area =================-->
<?php 
    if("$taxa[abouttemp_about_feature_on_off]" == 1){
        get_template_part('/temp-part/about-feature');
    }else{
        echo '';
    }
?>
<!--================ End About Area =================-->

<!--================ Start CTA Button Area =================-->
<?php 
    if("$taxa[abouttemp_cta_button_on_off]" == 1){
        get_template_part('/temp-part/cta-button');
    }else{
        echo '';
    }
?>
<!--================ End CTA Button Area =================-->

<!--================ Start Team Area =================-->
<?php 
    if("$taxa[abouttemp_team_on_off]" == 1){
        get_template_part('/temp-part/team');
    }else{
        echo '';
    }
?>
<!--================ End Team Area =================-->

<!--================ Start Popular Places Area =================-->
<?php 
    if("$taxa[abouttemp_popular_places_on_off]" == 1){
        get_template_part('/temp-part/popular-places');
    }else{
        echo '';
    }
?>
<!--================ End Popular Places Area =================-->

<!--================ Start Testimonials Area =================-->
<?php 
    if("$taxa[abouttemp_testimonials_on_off]" == 1){
        get_template_part('/temp-part/testimonials');
    }else{
        echo '';
    }
?>
<!--================ End Testimonials Area =================-->

<!--================  Start Footer Area =================-->
<?php get_footer(); ?>