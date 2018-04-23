<?php

/* 
	This is the temlate for the header 
	@
*/	
?>
<!DOCTYPE html>
<htlm <?php language_attributes(); ?>>
	<head>
			<title> <?php bloginfo ( 'name' ); wp_title(); ?></title>
			<meta name="description" content="<?php bloginfo ( 'description' ); ?>">
			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1"> 
			<link rel="profile" href="http://gmpg.org/xfn/11">
			<?php wp_head(); ?>
	</head>
<body <?php body_class();?> >


<div class="test-sidebar">
	<div class="test-sidebar-container">
			<a class="js-closeSidebar sidebar-close"> 
			<span class="fa fa-times fa-lg"></span>
			</a>
			

		<div class="sidebar-scroll">

			<?php get_sidebar(); ?>
		</div>
	</div>
</div> 


<div class="header-content">
	<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
	<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
</div> <!-- .header-content -->


		<div class="nav-container">
			<nav class="firstnav navbar-defult navbar-first">
				<?php
					wp_nav_menu( array(
						'theme_location' =>'First_menu',
						'container' => false,
						'menu_class' => 'nav navbar-first'
					 ) );
				?>
			</nav>
		</div> <!-- .nav-container  -->












