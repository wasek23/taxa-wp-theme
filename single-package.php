<?php get_header(); ?>
<!--================ End Header Area =================-->

<!--================Home Banner Area =================-->
<section class="banner_area ">
    <div class="banner_inner overlay d-flex align-items-center">
        <div class="container">
            <div class="banner_content">
                <div class="page_link">
                    <a href="<?php echo site_url(); ?>">Home</a>
                    <a href="<?php echo get_post_type_archive_link('package'); ?>">Package Home</a>
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
            <div class="col-lg-3  col-md-3">
                <div class="blog_info text-right">
                    <?php get_template_part('/temp-part/post-meta'); ?>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 blog_details">
                <div class="feature-img">
                    <?php the_post_thumbnail('feature_post_thumb', array('class' => 'img-fluid')); ?>
                </div>
                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
            </div>
        <?php
            setPostViews(get_the_ID());

                endwhile;
            endif;
        ?>
        
    </div>
</section>
<!--================Blog Area =================-->

<!--================  Start Footer Area =================-->
<?php get_footer(); ?>