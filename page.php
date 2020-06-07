<?php get_header(); ?>
<!--================ End Header Area =================-->

<!--================ start Page Banner Area =================-->
<?php get_template_part('/temp-part/page-banner'); ?>
<!--================ End Page Banner Area =================-->

<!--================  Start Page Content =================-->
        <?php
            if(have_posts()) :
                while(have_posts()) : the_post();
        ?>
            <div class="col-lg-8 col-md-10 col-11 section_gap mx-auto">
                <?php the_content(); ?>
            </div>
        <?php
                endwhile;
            endif;
        ?>
<!--================  End Page Content =================-->

<!--================  Start Footer Area =================-->
<?php get_footer(); ?>