<?php

/*
ASIDE POST
-------------------

*/
?>
<div class="around-article-post">
<article id="post-<?php the_ID(); ?>"<?php post_class(); ?>>
	<div class="article-post-aside">
	
	<?php 
	if( has_post_thumbnail() ):
			$featured_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
	?>
		<header class="entry-header background-image"style="background-image: url(<?php echo $featured_image; ?>);">
		<div class="inner-article-post">

		<div class="entry-meta">
				<?php echo theme_posted_meta(); ?>
			</div>

			<?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );?>
			
			<div class="entry-excerpt">
				<?php the_excerpt(); ?>
			</div>
			<div class="entry-content">

		 
			
		
		

	<div class="button-container">
	<a href="<?php the_permalink(); ?>" class="btn tbn-default"><?php _e(' » '); ?></a>

	</div>
	</div>
	<footer class="entry-footer">
		<?php echo theme_posted_footer(); ?>

	</footer>
	</div>
	</div>
		</header>
	<?php endif; ?>
	
</article>
</div>
