<?php include('book_trip_process.php'); ?>

<!-- Customize Global Variable -->
<?php global $taxa; ?>

<?php
/*
    Template Name: Book Trip Template
*/

get_header(); ?>
<!--================ End Header Area =================-->

<!--================ start Page Banner Area =================-->
<?php get_template_part('/temp-part/page-banner'); ?>
<!--================ End Page Banner Area =================-->

<!--================ Start Book a Trip Area =================-->
<section class="trip-area section_gap">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 col-md-10">
				<div class="trip-form-section" style="background: linear-gradient(0deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(<?php echo $taxa['bookTrip_form_bg_img']['url']; ?>) no-repeat; background-size: cover;">
					<h1><?php echo $taxa['bookTrip_form_title']; ?></h1>
					<form class="trip-form-area trip-page-form trip-form text-right" id="myForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
						<div class="form-group col-md-12 mb-4">
							<div class="form-select">
								<label class="form-control-label text-left d-block text-white" for="classes"><?php echo $taxa['bookTrip_form_class_label']; ?></label>
								<select name="classes" class="form-control">
									<option value="Economy">Economy</option>
									<option value="Premium Economy">Premium Economy</option>
									<option value="Business">Business</option>
									<option value="First">First</option>
								</select>
							</div>
						</div>
						<div class="mb-4" style="overflow: hidden;"></div>
						<div class="form-group col-md-12 mb-4">
							<label class="form-control-label text-left d-block text-white" for="fromCity"><?php echo $taxa['bookTrip_form_fromct_label']; ?></label>
							<input type="text" class="form-control" id="from" name="fromCity" placeholder="<?php echo $taxa['bookTrip_form_fromct_placeholder']; ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $taxa['bookTrip_form_fromct_placeholder']; ?>'">
						</div>
						<div class="form-group col-md-12 mb-4">
							<label class="form-control-label text-left d-block text-white" for="toCity"><?php echo $taxa['bookTrip_form_toct_label']; ?></label>
							<input type="text" class="form-control" id="to" name="toCity" placeholder="<?php echo $taxa['bookTrip_form_toct_placeholder']; ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?php echo $taxa['bookTrip_form_toct_placeholder']; ?>'">
						</div>
						<div class="form-group col-md-12 mb-4">
							<label class="form-control-label text-left d-block text-white" for="depart"><?php echo $taxa['bookTrip_form_depart_label']; ?></label>
							<input type="date" class="form-control" id="depart" name="depart">
						</div>
						<div class="form-group col-md-12 mb-4">
							<label class="form-control-label text-left d-block text-white" for="return"><?php echo $taxa['bookTrip_form_return_label']; ?></label>
							<input type="date" class="form-control" id="return" name="return">
						</div>
						<div class="form-group col-md-12 mb-4">
							<label class="form-control-label text-left d-block text-white" for="adults"><?php echo $taxa['bookTrip_form_adults_label']; ?></label>
							<input type="number" class="form-control" id="adults" name="adults" placeholder="Upto <?php echo $taxa['bookTrip_form_person_limit']; ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upto <?php echo $taxa['bookTrip_form_person_limit']; ?>'" max="<?php echo $taxa['bookTrip_form_person_limit']; ?>">
						</div>
						<div class="form-group col-md-12 mb-4">
							<label class="form-control-label text-left d-block text-white" for="child"><?php echo $taxa['bookTrip_form_child_label']; ?></label>
							<input type="number" class="form-control" id="child" name="child" placeholder="Upto <?php echo $taxa['bookTrip_form_person_limit']; ?>" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Upto <?php echo $taxa['bookTrip_form_person_limit']; ?>'" max="<?php echo $taxa['bookTrip_form_person_limit']; ?>">
						</div>
						<div class="col-lg-12 text-center">
							<button class="primary-btn text-uppercase" type="submit" name="submit"><?php echo $taxa['bookTrip_form_submit_btn_label']; ?></button>
						</div>
					</form>
					
					<div class="mt-3 mx-auto text-center">
						<?php
							echo $errClasses;
							echo $errFromCity;
							echo $errToCity;
							echo $errDepart;
							echo $errReturn;
							echo $errAdults;
							echo $errChild;
							echo $success;
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================ End Book a Trip Area =================-->

<!--================  Start Footer Area =================-->
<?php get_footer(); ?>

