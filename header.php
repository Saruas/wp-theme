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
			<link rel='https://api.w.org/' href='http://localhost:8888/wp-json/' />
			<?php wp_head(); ?>
	</head>
<body <?php body_class();?> >


	<div class="test-sidebar">
		<div class="test-sidebar-container">

				<a class="js-toggleSidebar sidebar-close"> 
				 <div id="nav-icon3">
					  <span></span>
					  <span></span>
					  <span></span>
					  <span></span>
				</div>

				</a>
				

			<div class="sidebar-scroll">

				<?php get_sidebar(); ?>
			</div>
		</div>
	</div> 

<div class="header-content">
	<a class="js-toggleSidebar sidebar-open"> 
			<span class="fa fa-bars fa-lg"></span>
	</a>

	<div class="nav-first-container">
		<div class="brand">
		      <a href="http://localhost:8888/">Logo</a>
		    </div>

	 <div class="nav-first-row"> 

			<nav class="firstnav navbar-defult navbar-first">
				<?php
					wp_nav_menu( array(
						'theme_location' =>'First_menu',
						'container' => false,
						'menu_class' => 'nav navbar-first'
					 ) );
				?>
			</nav>
		</div>	
		</div> <!-- .nav-container  -->	
<?php /*	
	<div class="nav-second-container">
		<div class="brand">
		      <a href="#!">Logo</a>
		    </div>
	 <div class="nav-second-row"> 
			<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>


			<nav class="secondnav navbar-defult navbar-second">
				<?php
					wp_nav_menu( array(
						'theme_location' =>'First_menu',
						'container' => false,
						'menu_class' => 'nav navbar-first'
					 ) );
				?>
			</nav>
		</div>	
		</div> <!-- .nav-container  -->
*/		?>
</div> <!-- .header-content -->











