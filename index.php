<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @package Fluida
 */
get_header();
?>
<div id="container" class="<?php echo fluida_get_layout_class(); ?>">
	<main id="main" role="main" class="main">
		<?php cryout_before_content_hook(); ?>

		<?php if ( have_posts() ) : ?>

			<div class="text">
				<h3 class="montserrat uppercase">This is Montserrat</h3>
				<p class="spartan">This is spartan. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis imperdiet <a href="#">massa tincidunt</a> nunc pulvinar sapien et. Hac habitasse platea dictumst vestibulum rhoncus est pellentesque elit. Aliquam faucibus purus in massa tempor.</p>
				<p class="spartan">In fermentum et sollicitudin ac orci phasellus egestas tellus. Pretium viverra suspendisse potenti nullam ac tortor. Sollicitudin aliquam ultrices sagittis orci. Erat nam at lectus urna duis convallis convallis. Tincidunt eget nullam non nisi est sit amet facilisis. Libero id faucibus nisl tincidunt eget.</p>
			</div>

			<div id="content-masonry" class="content-masonry" <?php cryout_schema_microdata( 'blog' ); ?>>
				<?php /* Start the Loop */
				while ( have_posts() ) : the_post();
					get_template_part( 'content/content', get_post_format() );
				endwhile;
				?>
			</div> <!-- content-masonry -->
			<?php fluida_pagination(); ?>

		<?php else :
			get_template_part( 'content/content', 'notfound' );
		endif; ?>

		<?php cryout_after_content_hook(); ?>
	</main><!-- #main -->

	<?php fluida_get_sidebar(); ?>
</div><!-- #container -->

<?php
get_footer();
