<!-- Customize Global Variable -->
<?php global $taxa; ?>

<?php get_header(); ?>
<!--================ End Header Area =================-->

<!--================ Start Archive Banner Area =================-->
<?php get_template_part('/temp-part/archive-banner'); ?>
<!--================ End Archive Banner Area =================-->

<!--================ Feature Area =================-->
<section class="feature-area section_gap container">
    <div class="row">
        <?php
            if(have_posts()) :
                while(have_posts()) : the_post();
        ?>
            <div class="col-lg-4 col-md-6">
                <div class="single-feature">
                    <div class="feature-details">
                    <a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
                        <p><?php if(has_excerpt()){ the_excerpt('13'); }else{ echo wp_trim_words(get_the_content(), 13); } ?></p>
                        <a href="<?php the_permalink(); ?>" class="primary-btn mb-40"><?php echo $taxa['feature_post_continue_read_btn_label']; ?></a>
                    </div>
                    <div class="feature-thumb">
                        <?php the_post_thumbnail('feature_post_thumb', array('class' => 'img-fluid')); ?>
                    </div>
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