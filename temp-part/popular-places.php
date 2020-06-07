<!-- Customize Global Variable -->
<?php global $taxa; ?>

<section class="popular-places-area section_gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-12">
                <div class="main_title">
                    <p><?php echo $taxa['popular_places_section_description']; ?></p>
                    <h1><?php echo $taxa['popular_places_section_title']; ?></h1>
                    <span class="title-widget-bg"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="popular-places-slider owl-carousel">
        
        <?php
            $popular_place_posts = new WP_Query(array(
                'post_type' => 'popular-place',
                'posts_per_page' => 4,
                'order' => 'DSC'
            ));
            
            if($popular_place_posts -> have_posts()) :
                while($popular_place_posts -> have_posts()) : $popular_place_posts -> the_post();

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
</section>