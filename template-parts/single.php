<?php

/*
SINGLE POST TEMPLATE
-------------------

*/
?>
<article id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
		<header class="stripped-single-post entry-header">

			<div class="stripped-single-post entry-meta">
				<?php echo theme_posted_meta(); ?>

			</div>
			<div class="stripped-single-post entry-title"> 	
				<?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );?>
			</div>
			<div class="stripped-single-post entry-keywords">

					<?php echo theme_posted_footer(); ?>
			</div>

					<?php 
							if( has_post_thumbnail() ):
									$featured_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
							?>
			<div class="entry-header background-image"style="background-image: url(<?php echo $featured_image; ?>);">
			</div>
							<?php endif; ?>
		</header>
			<div class="stripped-single-post entry-content clearfix">
				<?php the_content(); ?>
			</div>	

							<ol class="posts"> </ol>
					<div class="load-more">
						 <a class="load-more__button"   href="#">Load My Awesome Projects</a>
					</div>		
</article>

<footer>
	<div class="stripped-single-post-footer ">
		<?php echo stripped_post_navigation(); ?>
	</div>

	</div>
</footer>
