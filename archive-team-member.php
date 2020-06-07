<!-- Customize Global Variable -->
<?php global $taxa; ?>

<?php get_header(); ?>
<!--================ End Header Area =================-->

<!--================ Start Archive Banner Area =================-->
<?php get_template_part('/temp-part/archive-banner'); ?>
<!--================ End Archive Banner Area =================-->

<!--================ Feature Area =================-->
<section class="team_area section_gap container">
    <div class="row team_inner">
        
        <?php
            if(have_posts()) :
                while(have_posts()) : the_post();

                $team_member_role = get_post_meta(get_the_ID(), 'team_member_role', true);
        ?>
            <div class="col-lg-3 col-md-6">
                <div class="team_item">
                    <div class="team_img">
                        <?php the_post_thumbnail('team_member_post_thumb', array('class' => 'img-fluid w-100')); ?>
                        <div class="hover">
                            <h4><?php the_title(); ?></h4>
                            <p><?php echo $team_member_role; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php
                endwhile;
            endif;
        ?>

<!--================ Pagination =================-->
        <?php get_template_part('/temp-part/pagination'); ?>
    </div>
</section>
<!--================ Feature Area =================-->

<!--================  Start Footer Area =================-->
<?php get_footer(); ?>