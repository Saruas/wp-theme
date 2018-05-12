<?php

/*
VIDEO POST FORMAT
-------------------

*/
?>
<div class="around-article-post">
<article id="post-<?php the_ID(); ?>"<?php post_class( 'theme-format-image' ); ?>>
	<div class="article-post-default">
		<header class="entry-header">
			<div class="entry-meta">
				<?php echo theme_posted_meta(); ?>
			</div>

						<?php 
							$content = do_shortcode( apply_filters( 'the_content', $post->post_content ) );
							$embed = get_media_embedded_in_content( $content, array( 'audio', 'iframe' ) );

							echo $embed[0]; // Stop users to print to manny things on the first page

						 ?>
			
		</header>

		<div class="default-post-container">


			<div class="button-container-readmore">
			<div class="btn-arrow">
				<a href="<?php the_permalink(); ?>"></a>
			</div>	
			</div>
		</div>

		
	</div>
</article>
</div>
