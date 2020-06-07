<?php get_header(); ?>
<!--================ End Header Area =================-->

<!--================ Start Search Banner Area =================-->
<section class="banner_area ">
	<div class="banner_inner overlay d-flex align-items-center">
		<div class="container">
			<div class="banner_content">
				<div class="page_link">
					<a href="<?php echo site_url(); ?>">Home</a>
				</div>
				<h2>Search For: <?php the_search_query(); ?></h2>
			</div>
		</div>
	</div>
</section>
<!--================ End Search Banner Area =================-->

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