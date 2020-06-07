<!-- Customize Global Variable -->
<?php global $taxa; ?>

<?php get_header(); ?>
<!--================ End Header Area =================-->

<!--================Home Banner Area =================-->
<section class="banner_area ">
    <div class="banner_inner overlay d-flex align-items-center">
        <div class="container">
            <div class="banner_content">
                <div class="page_link">
                    <a href="<?php echo site_url(); ?>">Home</a>
                    <a href="<?php echo get_post_type_archive_link('testimonial'); ?>">Testimonials Home</a>
                </div>
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Blog Area =================-->
<section class="blog_area single-post-area section_gap container">
    <div class="single-post row">
        
        <?php
            if(have_posts()) :
                while(have_posts()) : the_post();
        ?>
            <div class="col-lg-3 col-md-3">
                <?php the_post_thumbnail('testimonial_post_thumb', array('class' => 'img-fluid rounded-circle')); ?>
            </div>
            
            <div class="col-lg-9 col-md-9 blog_details item">
                <div class="testi-item">
                    <img src="<?php echo $taxa['testimonial_quote_bg_img']['url']; ?>" alt="quote">
                    <h4><?php the_title(); ?></h4>
                    <div class="wow fadeIn" data-wow-duration="1s">
                        <p><?php the_content(); ?></p>
                    </div>

                </div>
            </div>
        <?php

                endwhile;
            endif;
        ?>
        
    </div>
</section>
<!--================Blog Area =================-->

<!--================  Start Footer Area =================-->
<?php get_footer(); ?>