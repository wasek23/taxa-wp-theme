<!-- Customize Global Variable -->
<?php global $taxa; ?>

<section class="home-blog-area section_gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                <div class="main_title">
                    <p><?php echo $taxa['homepage_blog_section_description']; ?></p>
                    <h1><?php echo $taxa['homepage_blog_section_title']; ?></h1>
                    <span class="title-widget-bg"></span>
                </div>
            </div>
        </div>
        <div class="row">
            
        <!-- single-blog -->
        <?php
            $homepage_posts = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'order' => 'DSC'
            ));
            
            if($homepage_posts -> have_posts()) :
                while($homepage_posts -> have_posts()) : $homepage_posts -> the_post();
        ?>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-blog">
                    <div class="blog-thumb">
                        <?php the_post_thumbnail('homepage_post_thumb', array('class' => 'img-fluid')); ?>
                    </div>
                    <div class="blog-details">
                        <div class="blog-meta d-flex">
                            <p><span class="fa fa-calendar"></span> <?php the_time('jS M'); ?></p>
                            <p><i class="lnr lnr-eye mr-2"></i><?php echo getPostViews(get_the_ID()); ?></p>
                        </div>
                        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <p><?php if(has_excerpt()){ the_excerpt('22'); }else{ echo wp_trim_words(get_the_content(), 22); } ?></p>
                    </div>
                </div>
            </div>
        <?php
                endwhile;
            endif;
        ?>

        </div>
    </div>
</section>