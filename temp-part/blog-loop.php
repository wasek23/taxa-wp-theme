<!-- Customize Global Variable -->
<?php global $taxa; ?>

<?php
    if(have_posts()) :
        while(have_posts()) : the_post();
?>
    <article class="row blog_item">
        <div class="col-md-3">
            <div class="blog_info text-right">
                <?php get_template_part('/temp-part/post-meta'); ?>
            </div>
        </div>
        <div class="col-md-9">
            <div class="blog_post">
                <?php the_post_thumbnail(); ?>
                <div class="blog_details">
                    <a href="<?php the_permalink(); ?>">
                        <h2><?php the_title(); ?></h2>
                    </a>
                    <p><?php if(has_excerpt()){ the_excerpt('22'); }else{ echo wp_trim_words(get_the_content(), 36); } ?></p>
                    <a href="<?php the_permalink(); ?>" class="blog_btn"><?php echo $taxa['blog_post_continue_read_btn_label']; ?></a>
                </div>
            </div>
        </div>
    </article>
<?php
        endwhile;
    endif;
?>

<!--================ Pagination =================-->
<?php get_template_part('/temp-part/pagination'); ?>