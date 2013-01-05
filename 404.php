<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package robinp
 * @since robinp 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<article id="post-0" class="post error404 not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Oops, something is broken.', 'robinp' ); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">

					<img class="border aligncenter size-full" title="Snapped_arm by Charlie bosmore - 52307935@N00 at Flickr" src="http://robin.medvedi.eu/wp-content/uploads/broken_arm.jpg" alt="Broken arm" width="578" height="409">

					<p>Sorry, no post was found at this location. Look at the last posts or search by tag.</p>

					<p>Or are you looking for my <a href="http://robin.medvedi.eu/" title="My old blog in Czech" hreflang="cs">old blog</a>? / Hledáte můj <a href="http://robin.medvedi.eu/" title="starý blog" hreflang="cs">starý český blog</a>?</p>


					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				</div><!-- .entry-content -->
			</article><!-- #post-0 .post .error404 .not-found -->

		</div><!-- #content -->
	</div><!-- #primary .site-content -->

<?php get_footer(); ?>