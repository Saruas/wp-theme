<?php

/* 
	This is the temlate for the header 
	@
*/	
?>
<!DOCTYPE html>
<htlm <?php language_attributes(); ?>>
	<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1"> 
			<link rel="profile" href="http://gmpg.org/xfn/11">
			<?php wp_head(); ?>
	</head>
<body <?php body_class();?> >

	<div class="container-fluid">

			<div class="row">
				<div class="col-xs-12">
						<div class="header-container text-center" style="background-image: url( <?php header_image(); ?>);"> <!-- // Kopplar den tidigare php uppladdningen i backend --> 
							<div class="header-content">

							</div> <!-- .header-content -->
							<div class="nav-container">

							</div> <!-- .nav-container  -->
						</div> <!-- .header-container -->
				</div> <!-- .col-xs-12 -->
			</div> <!--  .row -->

	</div>	<!-- .container-fluid -->