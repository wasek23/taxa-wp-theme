<?php
    $postUrl = 'http' . ( isset( $_SERVER['HTTPS'] ) ? 's' : '' ) . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
?>

<?php get_header(); ?>
<!--================ End Header Area =================-->

<!--================ Start Home Banner Area =================-->
<section class="banner_area ">
    <div class="banner_inner overlay d-flex align-items-center">
        <div class="container">
            <div class="banner_content">
                <div class="page_link">
                    <a href="<?php echo site_url(); ?>">Home</a>
                    <a href="<?php echo site_url('/blog'); ?>">Blog</a>
                </div>
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
    </div>
</section>
<!--================ End Home Banner Area =================-->

<!--================ Blog Area =================-->
<section class="blog_area single-post-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    
                    <?php
                        if(have_posts()) :
                            while(have_posts()) : the_post();
                    ?>
                        <div class="col-lg-12">
                            <div class="feature-img">
                                <?php the_post_thumbnail('post_thumb', array('class' => 'img-fluid')); ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="blog_info text-right">
                                <?php get_template_part('/temp-part/post-meta'); ?>
                                
                                <ul class="social-links">
                                    <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $postUrl; ?>"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/intent/tweet?url=<?php echo $postUrl; ?>&text=<?php echo the_title(); ?>"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://plus.google.com/share?url=<?php echo $postUrl; ?>"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="https://www.linkedin.com/shareArticle?url=<?php echo $postUrl; ?>&title=<?php echo the_title(); ?>"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 blog_details">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                        </div>
                    <?php
                        setPostViews(get_the_ID());

                            endwhile;
                        endif;
                    ?>
                    
                </div>

                <div class="navigation-area">
                    <div class="row">
                
                        <?php
                            $prev_post = get_previous_post();
                            $next_post = get_next_post();
                            
                            $prev_post_thumb = get_the_post_thumbnail($prev_post->ID, 'thumbnail', array('class' => 'img-fluid'));
                            $next_post_thumb = get_the_post_thumbnail($next_post->ID, 'thumbnail', array('class' => 'img-fluid'));
                            
                            the_post_navigation(array(
                                'prev_text'     => __('
                                    <div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center" style="float: left;">
                                        <div class="thumb">'.$prev_post_thumb.'</div>
                                        <div class="arrow"><span class="lnr text-white lnr-arrow-left"></span></div>
                                        <div class="detials">
                                            <p style="color: #777;">Prev Post</p>
                                            <h4>%title</h4>
                                        </div>
                                    </div>
                                '),

                                'next_text'     => __('
                                    <div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center" style="float: right;">
                                        <div class="detials">
                                            <p style="color: #777;">Next Post</p>
                                            <h4>%title</h4>
                                        </div>
                                        <div class="arrow"><span class="lnr text-white lnr-arrow-right"></span></div>
                                        <div class="thumb">'.$next_post_thumb.'</div>
                                    </div>
                                '),
                            ));
                        ?>

                    </div>
                </div>

                <?php comments_template(); ?>
                
            </div>
            
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>
<!--================Blog Area =================-->

<!--================  Start Footer Area =================-->
<?php get_footer(); ?>