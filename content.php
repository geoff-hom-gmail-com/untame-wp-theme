<?php
/**
 * @package untame
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'untame' ) ); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->