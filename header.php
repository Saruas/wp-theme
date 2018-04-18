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

<?php 
	$picture = esc_attr( get_option( 'profile_picture' ) );
	$firstName = esc_attr( get_option( 'first_name' ) );
	$lastName = esc_attr( get_option( 'last_name' ) );
	$fullName = $firstName . ' '. $lastName;
	$usertitle = esc_attr( get_option('user_title' ) );
	$description = esc_attr( get_option('user_description' ) );
	$linkedIn = esc_attr( get_option('linkedIn_handler' ) );
	$facebook = esc_attr( get_option('facebook_handler' ) );
	$instagram = esc_attr( get_option('instagram_handler' ) );
	$socialMedia = $linkedIn . ' ' . $facebook . ' ' . $instagram; 
 ?> 
<div class="test-sidebar-container" style="background-image: url( <?php header_image(); ?>);">
	<div class="test-sidebar">
		<?php get_sidebar(); ?>

		<div class="image-container">
			<div id="profile-picture-preview" class="profile-picture" style="background-image: url(<?php print $picture; ?>);"></div>
		</div>
		<h1 class="test-username"><?php print $fullName; ?></h1>
		<h2 class="test-title"><?php print $usertitle; ?></h2>
		<h2 class="test-discription"><?php print $description; ?></h2>
		
			<div class="icon-wrapper">
				<ul class="socialMedia">
					<li class="socialMedia linkedIn"><a class="linkedIn" href="https://www.linkedin.com/in/<?php print $linkedIn; ?>" target="_blank"></a></li>
					<li class="socialMedia facebook"><a class="facebook" href="https://www.facebook.com/<?php print $facebook; ?>" target="_blank"></a></li>
					<li class="socialMedia instagram"><a href="https://www.instagram.com/<?php print $instagram; ?>" target="_blank"></a></li>
				</ul>
			</div>		
	</div>
</div> <!-- test-sidebar-container -->

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












