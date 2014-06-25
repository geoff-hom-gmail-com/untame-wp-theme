<?php
/**
 * The template for the home page.
 *
 * @package untame
 */
get_header(); ?>
<div id="primary" class="content-area">
<main id="main" class="site-main" role="main">
	<div class="social">  
    		<div class="fb-like" data-href="https://www.facebook.com/untamegames" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
    		<a href="https://twitter.com/untamegames" class="twitter-follow-button" data-show-count="false">Follow @untamegames</a><br/>
    		<a style="text-align:right;" href="https://twitter.com/itayke" class="twitter-follow-button" data-show-count="false">Follow @itayke</a>
	</div><!-- .social -->
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>
		<?php untame_paging_nav(); ?>
	<?php else : ?>		
		<?php get_template_part( 'content', 'none' ); ?>
	<?php endif; ?>
</main><!-- #main -->
</div><!-- #primary -->
<?php get_footer(); ?>