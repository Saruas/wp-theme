<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"></main>
		<div class="single-page-container">
			<?php

				if( have_posts() ):

				while( have_posts() ): the_post();

					get_template_part( 'template-parts/single', get_post_format() );


				endwhile;

				endif;
			?>
		</div>
	</div> 

<?php get_footer(); ?>