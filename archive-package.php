<!-- Customize Global Variable -->
<?php global $taxa; ?>

<?php get_header(); ?>
<!--================ End Header Area =================-->

<!--================ Start Archive Banner Area =================-->
<?php get_template_part('/temp-part/archive-banner'); ?>
<!--================ End Archive Banner Area =================-->

<!--================ Feature Area =================-->
<section class="package-area section_gap container">
    <div class="row">
        <?php
            if(have_posts()) :
                while(have_posts()) : the_post();
        ?>
            <div class="col-lg-4 col-md-6">
                <div class="single-package">
                    <div class="thumb">
                        <?php the_post_thumbnail('package_post_thumb', array('class' => 'img-fluid')); ?>
                    </div>
                    <p class="date"><span><?php the_time('d'); ?></span> <br><?php the_time('F'); ?></p>
                    <div class="meta-top d-flex">
                        <p><span class="fa fa-location-arrow"></span> <?php echo $package_location; ?></p>
                        <p class="ml-20"><span class="fa fa-calendar"></span> <?php echo $package_duration; ?></p>
                    </div>
                    <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
                    <p><?php if(has_excerpt()){ the_excerpt('13'); }else{ echo wp_trim_words(get_the_content(), 13); } ?></p>
                    <a href="<?php the_permalink(); ?>" class="primary-btn"><?php echo $taxa['package_post_continue_read_btn_label']; ?></a>
                </div>
            </div>
        <?php
                endwhile;
            endif;
        ?>
<!--================ Pagination =================-->
        <?php get_template_part('/temp-part/pagination'); ?>
    </div>
</section>
<!--================ Feature Area =================-->

<!--================  Start Footer Area =================-->
<?php get_footer(); ?>