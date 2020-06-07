<!-- Customize Global Variable -->
<?php global $taxa; ?>

	<footer class="footer-area">
		<div class="footer_top section_gap_top">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<?php dynamic_sidebar('footer_left'); ?>
					</div>
					<div class="col-lg-2 col-md-6 col-sm-6">
						<?php dynamic_sidebar('footer_left_middle'); ?>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<?php dynamic_sidebar('footer_right_middle'); ?>
					</div>
					<div class="col-lg-3  col-md-6 col-sm-6">
						<?php dynamic_sidebar('footer_right'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							<?php echo $taxa['footer_copyright']; ?>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
					</div>
					<div class="col-lg-6 col-md-12 text-right">
						<div class="social-icons">
									
						<?php
							$i = 0;

							if(is_array($taxa['footer_social_links'])){
								foreach($taxa['footer_social_links'] as $footer_single_social_links){
									$i++;
						?>
							<a href="<?php echo esc_url($footer_single_social_links['url']); ?>"><i class="fa fa-<?php echo $footer_single_social_links['title']; ?>"></i></a>
						<?php
								}
							}
						?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End Footer Area =================-->

    <?php wp_footer(); ?>

</body>

</html>