<?php get_header(); ?>
<!--================ End Header Area =================-->

<!--================Home Banner Area =================-->
<section class="banner_area ">
    <div class="banner_inner overlay d-flex align-items-center">
        <div class="container">
            <div class="banner_content">
                <div class="page_link">
                    <a href="<?php echo site_url(); ?>">Home</a>
                    <a href="<?php echo get_post_type_archive_link('team-member'); ?>">Team Members Home</a>
                </div>
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================Blog Area =================-->
<section class="blog_area single-post-area section_gap container">
        
        <?php
            if(have_posts()) :
                while(have_posts()) : the_post();

                $team_member_role = get_post_meta(get_the_ID(), 'team_member_role', true);
        ?>
            <div class="team_item">
                <div class="team_img">
                    <?php the_post_thumbnail('team_member_post_thumb', array('class' => 'img-fluid w-100')); ?>
                    <div class="hover">
                        <h4><?php the_title(); ?></h4>
                        <p><?php echo $team_member_role; ?></p>
                    </div>
                </div>
            </div>
        <?php

                endwhile;
            endif;
        ?>
    
</section>
<!--================Blog Area =================-->

<!--================  Start Footer Area =================-->
<?php get_footer(); ?>