<?php

/*
STANDARD POST
-------------------

*/
?>
<div class="around-article-post">
	<article id="post-<?php the_ID(); ?>"<?php post_class( 'theme-format-audio' ); ?>>
		<div class="article-post-default">

			<header class="entry-header">
				<div class="entry-meta">
					<?php echo theme_posted_meta(); ?>
				</div>	
			</header>

				<div class="default-post-container">

						<?php the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );?>
						<?php 
							$content = do_shortcode( apply_filters( 'the_content', $post->post_content ) );
							$embed = get_media_embedded_in_content( $content, array( 'audio', 'iframe' ) );

							echo $embed[0]; // Stop users to print to manny things on the first page

						 ?>

					<footer class="entry-footer">
						<?php echo theme_posted_footer(); ?>

					</footer>

				</div>
		</div>
	</article>
</div>
