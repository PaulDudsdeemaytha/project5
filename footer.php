<?php
/**
 * The template for displaying the footer.
 *
 * @package QOD_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">

					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'mene_id' => 'primary-menu',
							'menu_class' => 'footer-navigation' 
						)
					)
					
					?>
					<p>Made only by <a href="https://github.com/PaulDudsdeemaytha">Paul Dudsdeemaytha</a> <?php echo date("Y"); ?></p>


				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
