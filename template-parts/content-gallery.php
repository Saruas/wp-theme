<?php

/*
STANDARD POST
-------------------

*/
?>
<div class="around-article-post">
<article id="post-<?php the_ID(); ?>"<?php post_class( 'theme-format-gallery' ); ?>>
	<div class="article-post-default">
		<header class="entry-header">
			<div class="entry-meta">
				<?php echo theme_posted_meta(); ?>
			</div>

			<?php 
				$featured_image = '';
				if( has_post_thumbnail() ):
					$featured_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
				else:

					$featured_image = pinit_get_attachment();
					endif;	
			?>
			<div class="thumbnail-background">

				 <a class="standard-featured-link" href="<?php the_permalink(); ?>">
					<div class="standard-featured background-image" style="background-image: url(<?php echo $featured_image; ?>);">
				</a>	 	
			</div>
		</header>

		
	</div>
</article>
</div>
