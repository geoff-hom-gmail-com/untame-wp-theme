<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package untame
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<!-- <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'untame' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'untame' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'untame' ), 'untame', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?> -->

			<div style="margin:5px">
				The Untame brand and  all website content is<br>
      				Copyright © 2014 Keren Software LLC. All Rights Reserved.
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>