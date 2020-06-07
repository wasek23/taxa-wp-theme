<div class="post_tag">
	<?php the_tags('', ', ', ''); ?>
</div>
<ul class="blog_meta list">
	<li><?php the_author_posts_link(); ?><i class="lnr lnr-user"></i></li>
	<li><?php the_time('d M, Y'); ?><i class="lnr lnr-calendar-full"></i></li>
	<li><?php echo getPostViews(get_the_ID()); ?><i class="lnr lnr-eye"></i></li>
	<li><?php comments_popup_link('No Comments', '1 Comment', '% Comments', '', 'Comments Off'); ?><i class="lnr lnr-bubble"></i></li>
</ul>