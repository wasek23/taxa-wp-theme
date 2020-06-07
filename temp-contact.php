<?php include('contact_process.php'); ?>

<!-- Customize Global Variable -->
<?php global $taxa; ?>

<?php
/*
    Template Name: Contact Template
*/

get_header(); ?>
<!--================ End Header Area =================-->

<!--================ Start Page Banner Area =================-->
<?php get_template_part('/temp-part/page-banner'); ?>
<!--================ End Page Banner Area =================-->

<!--================Contact Area =================-->
<section class="contact_area section_gap">
	<div class="container">

<!--================ Start Map Area =================-->
		<?php 
			if("$taxa[contacttemp_map_on_off]" == 1){
				get_template_part('/temp-part/contact-map');
			}else{
				echo '';
			}
		?>
<!--================ End Map Area =================-->

		<div class="row">
			<div class="col-lg-5">
				<div class="contact_info">
					<div class="info_item">
						<i class="lnr lnr-home"></i>
						<h6><?php echo $taxa['contact_address']; ?></h6>
						<p><?php echo $taxa['contact_address_description']; ?></p>
					</div>
					<div class="info_item">
						<i class="lnr lnr-phone-handset"></i>
						<h6><?php echo $taxa['contact_number']; ?></h6>
						<p><?php echo $taxa['contact_number_description']; ?></p>
					</div>
					<div class="info_item">
						<i class="lnr lnr-envelope"></i>
						<h6><a href="<?php echo esc_url($taxa['contact_email']); ?>"><?php echo $taxa['contact_email']; ?></a></h6>
						<p><?php echo $taxa['contact_email_description']; ?></p>
					</div>
				</div>
			</div>
			<div class="col-lg-7 contact_form" id="contactForm">
				<form class="row contact_form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="contactForm" novalidate="novalidate">
					<div class="col-md-6">
						<div class="form-group">
							<input type="text" class="form-control" id="name" name="name" placeholder="<?php echo $taxa['form_name_placeholder']; ?>">
						</div>
						<div class="form-group">
							<input type="email" class="form-control" id="email" name="email" placeholder="<?php echo $taxa['form_email_placeholder']; ?>">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" id="subject" name="subject" placeholder="<?php echo $taxa['form_subject_placeholder']; ?>">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<textarea class="form-control" name="message" id="message" placeholder="<?php echo $taxa['form_message_placeholder']; ?>"></textarea>
						</div>
					</div>
					<div class="col-md-12 text-right">
						<button type="submit" name="submit" value="submit" class="primary-btn text-uppercase"><?php echo $taxa['form_submit_btn_label']; ?></button>
					</div>
					<p class="messageSuccess text-success mt-3 mx-auto"><?php echo $success; ?></p>
				</form>
			</div>
		</div>
	</div>
</section>
<!--================Contact Area =================-->

<!--================  Start Footer Area =================-->
<?php get_footer(); ?>