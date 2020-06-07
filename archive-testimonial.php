<!-- Customize Global Variable -->
<?php global $taxa; ?>

<?php get_header(); ?>
<!--================ End Header Area =================-->

<!--================ Start Archive Banner Area =================-->
<?php get_template_part('/temp-part/archive-banner'); ?>
<!--================ End Archive Banner Area =================-->

<!--================ Feature Area =================-->
<section class="testimonials-area section_gap container">
    <div class="testi-slider owl-carousel" data-slider-id="1">
        <?php
            if(have_posts()) :
                while(have_posts()) : the_post();
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
            if(have_posts()) :
                while(have_posts()) : the_post();
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

    <div class="row">
<!--================ Pagination =================-->
        <?php get_template_part('/temp-part/pagination'); ?>
    </div>
</section>
<!--================ Feature Area =================-->

<!--================  Start Footer Area =================-->
<?php get_footer(); ?>