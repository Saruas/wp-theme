<?php

/* 
	This is the temlate for the header 
	@
*/	
?>
<!DOCTYPE html>
<htlm <?php language_attributes(); ?>>
	<head>
			<meta charset="<?php bloginfo('charset'); ?>">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<?php wp_head(); ?>
	</head>
<body <?php body_class();?> >	