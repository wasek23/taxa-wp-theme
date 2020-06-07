<!-- Customize Global Variable -->
<?php global $taxa; ?>

<div class="cta-area section_gap" style="background: url(<?php echo $taxa['cta_button_section_bg_img']['url']; ?>) center no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h1><?php echo $taxa['cta_button_section_title']; ?></h1>
                <p><?php echo $taxa['cta_button_section_description']; ?></p>
                <a href="<?php echo esc_url($taxa['cta_button_url']); ?>" class="primary-btn"><?php echo $taxa['cta_button_label']; ?></a>
            </div>
            <div class="offset-lg-1 col-lg-6">
                <img class="cta-img img-fluid" src="<?php echo $taxa['cta_button_section_img']['url']; ?>" alt="">
            </div>
        </div>
    </div>
</div>