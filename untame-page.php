<?php
/*
 * Template Name: Untame1
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=150827075004636";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	
    
    <div class="undertitle">
	  <div class="centerbox" id="centerbox">

<div class="social">  
    <div class="fb-like" data-href="https://www.facebook.com/untamegames" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
    <a href="https://twitter.com/untamegames" class="twitter-follow-button" data-show-count="false">Follow @untamegames</a>  
</div>




			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

  </div> <!-- centerbox -->
	</div> <!-- undertitle -->


		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>