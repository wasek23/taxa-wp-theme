<!-- Customize Global Variable -->
<?php global $taxa; ?>

<section class="feature-area section_gap">
    <div class="container">
        <div class="row align-items-end justify-content-left">
            <div class="col-lg-12">
                <div class="main_title">
                    <p><?php echo $taxa['feature_section_description']; ?></p>
                    <h1><?php echo $taxa['feature_section_title']; ?></h1>
                    <span class="title-widget-bg"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- single-feature -->
            
            <?php
                $feature_posts = new WP_Query(array(
                    'post_type' => 'feature',
                    'posts_per_page' => 3,
                    'order' => 'DSC'
                ));
                
                if($feature_posts -> have_posts()) :
                    while($feature_posts -> have_posts()) : $feature_posts -> the_post();
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
            
        </div>
    </div>
</section>