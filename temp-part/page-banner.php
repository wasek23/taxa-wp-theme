<!-- Customize Global Variable -->
<?php global $taxa; ?>

<section class="banner_area ">
	<div class="banner_inner overlay d-flex align-items-center" style="background: url(<?php echo $taxa['globalpage_banner_bg_img']['url']; ?>) no-repeat center center;">
		<div class="container">
			<div class="banner_content">
				<div class="page_link">
					<a href="<?php echo site_url(); ?>">Home</a>
				</div>
				<h2><?php single_post_title(); ?></h2>
			</div>
		</div>
	</div>
</section>