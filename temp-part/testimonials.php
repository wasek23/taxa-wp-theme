<!-- Customize Global Variable -->
<?php global $taxa; ?>

<section class="testimonials-area section_gap">
    <div class="container">
        <div class="testi-slider owl-carousel" data-slider-id="1">
            
            <?php
                $testimonial_posts = new WP_Query(array(
                    'post_type' => 'testimonial',
                    'posts_per_page' => 43,
                    'order' => 'DSC'
                ));
                
                if($testimonial_posts -> have_posts()) :
                    while($testimonial_posts -> have_posts()) : $testimonial_posts -> the_post();

                    $testimonial_star = get_post_meta(get_the_ID(), 'testimonial_star', true);
            ?>
                <div class="item">
                    <div class="testi-item">
                        <img src="<?php echo $taxa['testimonial_quote_bg_img']['url']; ?>" alt="quote">
                        <h4><?php the_title(); ?></h4>
                        <ul class="list star_list">
                            <?php
                                if($testimonial_star == 'One'){
                                    echo '<li><i class="fa fa-star"></i></li>';
                                }
                                elseif($testimonial_star == 'Two'){
                                    echo '<li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>';
                                }
                                elseif($testimonial_star == 'Three'){
                                    echo '<li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>';
                                }
                                elseif($testimonial_star == 'Four'){
                                    echo '<li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>';
                                }
                                elseif($testimonial_star == 'Five'){
                                    echo '<li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>
                                          <li><i class="fa fa-star"></i></li>';
                                }
                                else{
                                    echo 'Undefined';
                                }
                            ?>
                        </ul>
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
        <div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
            
            <?php
                if($testimonial_posts -> have_posts()) :
                    while($testimonial_posts -> have_posts()) : $testimonial_posts -> the_post();
            ?>
                <div class="owl-thumb-item">
                    <?php the_post_thumbnail('testimonial_post_thumb', array('class' => 'img-fluid rounded-circle')); ?>
                    <div class="overlay overlay-grad"></div>
                </div>
            <?php
                    endwhile;
                endif;
            ?>

        </div>
    </div>
</section>