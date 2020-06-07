<!-- Customize Global Variable -->
<?php global $taxa; ?>

<section class="package-area section_gap">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="ol-lg-12">
                <div class="main_title">
                    <p><?php echo $taxa['package_section_description']; ?></p>
                    <h1><?php echo $taxa['package_section_title']; ?></h1>
                    <span class="title-widget-bg"></span>
                </div>
            </div>
        </div>
        <div class="row">
            
            <?php
                $package_posts = new WP_Query(array(
                    'post_type' => 'package',
                    'posts_per_page' => 3,
                    'order' => 'DSC'
                ));
                
                if($package_posts -> have_posts()) :
                    while($package_posts -> have_posts()) : $package_posts -> the_post();

                    $package_location = get_post_meta(get_the_ID(), 'package_location', true);
                    $package_duration = get_post_meta(get_the_ID(), 'package_duration', true);
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
            
        </div>
    </div>	
</section>