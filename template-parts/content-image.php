<?php

/*
IMAGE POST FORMAT
-------------------

*/
?>
<div class="around-article-post">
<article id="post-<?php the_ID(); ?>"<?php post_class( 'theme-format-image' ); ?>>
	<div class="article-post">
	<header class="entry-header">

		<div class="entry-meta">
		<?php echo theme_posted_meta(); ?>
		</div>

		<?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );?>
	</header>

	<div class="entry-content">
		<?php if( has_post_thumbnail() ):
			$featured_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
		 ?>
		 <a class="standard-featured-link" href="<?php the_permalink(); ?>">
			<div class="standard-featured background-image" style="background-image: url(<?php echo $featured_image; ?>);"> 
			</div>
		</a>	
		<?php endif; ?>
		<div class="entry-excerpt">
		<?php the_excerpt(); ?>
		</div>

	<div class="button-container">
	<a href="<?php the_permalink(); ?>" class="btn tbn-default"><?php _e(' Read More '); ?></a>

	</div>
	</div>
	<footer class="entry-footer">
		<?php echo theme_posted_footer(); ?>

	</footer>
	</div>
</article>
</div>
