<?php

/*
STANDARD POST
-------------------

*/
?>
<div class="around-article-post pinit-dubble">
<article id="post-<?php the_ID(); ?>"<?php post_class( 'theme-format-image' ); ?>>
	<div class="article-post-image">
		<header class="entry-header">
			<div class="entry-meta">
				<?php echo theme_posted_meta(); ?>
			</div>

			<div class="thumbnail-background">
				<?php 
				$featured_image = '';
				if( has_post_thumbnail() ):
					$featured_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
				else:

					$featured_image = pinit_get_attachment();
					endif;	
			?>
				 <a class="standard-featured-link" href="<?php the_permalink(); ?>">
					<div class="standard-featured background-image" style="background-image: url(<?php echo $featured_image; ?>);">
				</a>	 
	
							<div class="button-container-readmore">
			<div class="btn-arrow">
				<a href="<?php the_permalink(); ?>"></a>
			</div>	
			</div>
			</div>
		</header>

</article>
</div>
