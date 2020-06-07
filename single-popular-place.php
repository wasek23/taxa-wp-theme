<?php get_header(); ?>
<!--================ End Header Area =================-->

<!--================Home Banner Area =================-->
<section class="banner_area ">
    <div class="banner_inner overlay d-flex align-items-center">
        <div class="container">
            <div class="banner_content">
                <div class="page_link">
                    <a href="<?php echo site_url(); ?>">Home</a>
                    <a href="<?php echo get_post_type_archive_link('popular-place'); ?>">Popular Places Home</a>
                </div>
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Blog Area =================-->
<section class="blog_area single-post-area section_gap container">
        
        <?php
            if(have_posts()) :
                while(have_posts()) : the_post();

                $post_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full');
                $popular_place_feature = get_post_meta(get_the_ID(), 'popular_place_feature', true);
        ?>
            <a href="<?php echo $post_thumb[0]; ?>" class="single-popular-places d-block img-gal">
                <div class="popular-places-img">
                    <?php the_post_thumbnail('popular_place_post_thumb', array('class' => 'img-fluid img_full')); ?>
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
    
</section>
<!--================Blog Area =================-->

<!--================  Start Footer Area =================-->
<?php get_footer(); ?>