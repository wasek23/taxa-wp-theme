<?php if ( have_comments() ) : ?>
	<div class="comments-area">
		<h4>Comments</h4>

		<?php
			wp_list_comments(array(
				'style'       => 'div',
				'short_ping'  => true,
				'avatar_size' => 60,
				'walker'      => new comment_walker()
			));
		?>

	</div>

		<?php
			// Are there comments to navigate through?
			if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
		?>
		<nav class="navigation comment-navigation" role="navigation">
			<h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'Taxa' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'Taxa' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'Taxa' ) ); ?></div>
		</nav><!-- .comment-navigation -->
		<?php endif; // Check for comment navigation ?>

		<?php if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.' , 'Taxa' ); ?></p>
		<?php endif; ?>
	
<?php endif; // have_comments() ?>

<?php if(comments_open()) : ?>
	<div class="comment-form">
		<h4>Leave a Reply</h4>

    	<?php if(get_option('comment_registration') && !$user_ID) : ?>  
			<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p><?php else : ?>  
			
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="form-horizontal">

				<?php if($user_ID) : ?>  
					<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
				<?php else : ?>

					<div class="form-group form-inline">
						<div class="form-group col-lg-6 col-md-6 name">	
							<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" class="form-control" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'"/>
						</div>
						
						<div class="form-group col-lg-6 col-md-6 email">	
							<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" class="form-control" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'"/>
						</div>
					</div>
					<div class="form-group">
						<input type="text" name="subject" id="subject" value="<?php echo $comment_author_subject; ?>" class="form-control" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
					</div>

				<?php endif; ?>
				
				<div class="form-group">
					<textarea name="comment" id="comment" rows="5" tabindex="4" class="form-control mb-10" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
				</div>

				<?php //show_subscription_checkbox(); ?>
				<p><input name="submit" type="submit" id="submit" tabindex="5" value="Post Comment" class="primary-btn"/>  
				<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>  
				<?php do_action('comment_form', $post->ID); ?>  

			</form>

		<?php endif; ?>
	</div>
<?php else : ?>  
    <p>The comments are closed.</p>  
<?php endif; ?>