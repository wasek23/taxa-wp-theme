<!-- Customize Global Variable -->
<?php global $taxa; ?>

<?php get_header(); ?>
<!--================ End Header Area =================-->

<!--================ Start Archive Banner Area =================-->
<?php get_template_part('/temp-part/archive-banner'); ?>
<!--================ End Archive Banner Area =================-->

<!--================ Feature Area =================-->
<section class="popular-places-area section_gap">
    <div class="popular-places-slider owl-carousel">
        
        <?php
            if(have_posts()) :
                while(have_posts()) : the_post();

                $post_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
                $popular_place_feature = get_post_meta(get_the_ID(), 'popular_place_feature', true);
        ?>
            <a href="<?php echo $post_thumb[0]; ?>" class="single-popular-places d-block img-gal">
                <div class="popular-places-img">
                    <?php the_post_thumbnail('popular_place_post_thumb', array('class' => 'img-fluid')); ?>
                </div>
                <div class="popular-places-text">
                    <p><?php echo $popular_place_feature; ?></p>
                    <h4><?php the_title(); ?></h4>
                </div>
            </a>
        <?php
                endwhile;
            endif;
        ?>

    </div>

    <div class="row">
<!--================ Pagination =================-->
        <?php get_template_part('/temp-part/pagination'); ?>
    </div>
</section>
<!--================ Feature Area =================-->

<!--================  Start Footer Area =================-->
<?php get_footer(); ?>