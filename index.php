<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"></main>

			<div class="full-container">
			<div class="page-container-sidebar">
				<div class="test-header-background background-image" style="background-image: url(<?php header_image() ?>);">
						<div class="header-content table">
							<div class="table-cell">	
							<h1 class="site-title"><?php bloginfo( 'name' )?></h1>
							<h2 class="site-discription"><?php bloginfo( 'description' )?></h2>
						</div>
						</div>
				</div> 

				 <h2 class="portfolio-header">My Portfolio</h2> 
				 <ol class="posts"></ol>
				 	<div class="load-more">
				        <a class="load-more__button"   href="#">Load My Awesome Projects</a>
				    </div>

				<?php

					if( have_posts() ):

					while( have_posts() ): the_post();

						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;

					endif;
				?>
				
			</div>	
	</div> 

<?php get_footer(); ?>


