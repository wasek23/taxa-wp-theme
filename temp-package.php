<?php
/*
    Template Name: Package Template
*/

get_header(); ?>
<!--================ End Header Area =================-->

<!--================ start Page Banner Area =================-->
<?php get_template_part('/temp-part/page-banner'); ?>
<!--================ End Page Banner Area =================-->

<!--================ Start Trip Package Area =================-->
<?php 
    if("$taxa[packagetemp_package_on_off]" == 1){
        get_template_part('/temp-part/package');
    }else{
        echo '';
    }
?>
<!--================ End Trip Package Area =================-->

<!--================ Start Popular Places Area =================-->
<?php 
    if("$taxa[packagetemp_popular_places_on_off]" == 1){
        get_template_part('/temp-part/popular-places');
    }else{
        echo '';
    }
?>
<!--================ End Popular Places Area =================-->

<!--================ Start Feature Area =================-->
<?php 
    if("$taxa[packagetemp_feature_on_off]" == 1){
        get_template_part('/temp-part/feature');
    }else{
        echo '';
    }
?>
<!--================ End Feature Area =================-->

<!--================ Start CTA Newsletter Area =================-->
<?php 
    if("$taxa[packagetemp_cta_newsletter_on_off]" == 1){
        get_template_part('/temp-part/cta-newsletter');
    }else{
        echo '';
    }
?>
<!--================ End CTA Newsletter Area =================-->

<!--================  Start Footer Area =================-->
<?php get_footer(); ?>