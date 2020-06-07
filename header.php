<!-- Customize Global Variable -->
<?php global $taxa; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Required meta tags -->
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?php echo $taxa['web_favicon']['url']; ?>" type="image/png">
	<title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>

<body>

	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="<?php echo site_url(); ?>"><img src="<?php echo $taxa['header_logo']['url']; ?>" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        
                        <?php
                            wp_nav_menu(array(
                                'theme_location'    => 'primary',
                                'menu_class'        => 'nav navbar-nav menu_nav ml-auto',
                                'depth'             => 2,
                                'container'         => '',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker()
                            ));
                        ?>

						<ul class="nav navbar-nav ml-auto">
							<li class="nav-item">
								<a href="<?php echo esc_url($taxa['menu_btn_url']); ?>" class="primary-btn"><?php echo $taxa['menu_btn_label']; ?></a>
							</li>
							<li class="nav-item">
								<button type="button" class="search nav-link">
									<i class="lnr lnr-magnifier" id="search"></i>
								</button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			
			<div class="search_input" id="search_input_box">
				<div class="container">
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
	</header>