<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main"></main>

			<div class="full-container">
				<div class="page-container-sidebar"> 

					<div id="portfolio-posts-container"></div>
					<button id="portfolio-posts-btn"> click</button>
					
					 <input type="text" class="admin-quick-add" name="title" placeholder="Title">
					 <textarea class="admin-qouck-add" name="content" placeholder="Content"> </textarea>
					 <button id="quick-add-button">Creat post</button>


				<?php

					if( have_posts() ):

					while( have_posts() ): the_post();

						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;

					endif;
				?>

			</div>	
	</div> 
</div>
<!-- Return to Top -->
<a href="javascript:" id="return-to-top"><span class="pinit-up-button"></span></a>



<?php get_footer(); ?>


