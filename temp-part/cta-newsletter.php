<!-- Customize Global Variable -->
<?php global $taxa; ?>

<div class="cta-area2 section_gap" style="background: url(<?php echo $taxa['cta_newsletter_section_bg_img']['url']; ?>) center no-repeat;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="cta-img2 img-fluid" src="<?php echo $taxa['cta_newsletter_section_img']['url']; ?>" alt="">
            </div>
            <div class="offset-lg-2 col-lg-5">
                <h1><?php echo $taxa['cta_newsletter_section_title']; ?></h1>
                <p><?php echo $taxa['cta_newsletter_section_description']; ?></p>
                <div class="" id="mc_embed_signup2">
                    <form target="_blank" novalidate="true" action="<?php echo esc_url($taxa['mailchimp_post_url']); ?>"
                        method="get" class="form-inline">
                        <div class="d-flex flex-row">
                            <input class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '"
                                required="" type="email">
                            <button class="click-btn btn text-uppercase"><?php echo $taxa['cta_newsletter_submit_btn_label']; ?></button>
                            <div style="position: absolute; left: -5000px;">
                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                            </div>
                        </div>
                        <div class="info"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>