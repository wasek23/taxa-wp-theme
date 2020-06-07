<?php get_header(); ?>
<!--================ End Header Area =================-->

<!--================ Start Archive Banner Area =================-->
<?php get_template_part('/temp-part/archive-banner'); ?>
<!--================ End Archive Banner Area =================-->

<!--================Blog Area =================-->
<section class="blog_area container section_gap">
    <div class="blog_left_sidebar">
        
<!--================ Start Blog Loop =================-->
    	<?php get_template_part('/temp-part/blog-loop'); ?>
<!--================ End Blog Loop =================-->

    </div>
</section>
<!--================Blog Area =================-->

<!--================  Start Footer Area =================-->
<?php get_footer(); ?>