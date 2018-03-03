<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="quote-icon">
		<i class="fas fa-quote-left" style="color:#00cc00"></i>
		</div>
		<div class="content">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
</div>
			<div class="quote-icon">
		<i class="fas fa-quote-right" style="color:#00cc00"></i>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
