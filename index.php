<?php get_header(); ?>
<!--================ End Header Area =================-->

<!--================ Start Page Banner Area =================-->
<?php get_template_part('/temp-part/page-banner'); ?>
<!--================ End Page Banner Area =================-->

<!--================ Start Blog Categorie Area =================-->
<?php get_template_part('/temp-part/blog-categorie'); ?>
<!--================ End Blog Categorie Area =================-->

<!--================Blog Area =================-->
<section class="blog_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog_left_sidebar">

<!--================ Start Blog Loop =================-->
                <?php get_template_part('/temp-part/blog-loop'); ?>
<!--================ End Blog Loop =================-->

                </div>
            </div>

            <?php get_sidebar(); ?>
        </div>
    </div>
</section>
<!--================Blog Area =================-->

<!--================  Start Footer Area =================-->
<?php get_footer(); ?>