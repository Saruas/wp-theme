<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"></main>
		<div class="page-container-sidebar">
			<div class="test-single-page">
				<?php

					if( have_posts() ):

					while( have_posts() ): the_post();

						get_template_part( 'template-parts/single', get_post_format() );


					endwhile;

					endif;
				?>
			</div>
		</div>	
	</div> 

<?php get_footer(); ?>