<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecitulje
 */

?>

	<footer id="colophon" class="site-footer bg-dark">
		<div class="container pb-2 pt-5">
			<div class="site-info text-center text-white">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'ecitulje' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by DNG Studio', 'ecitulje' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'ecitulje' ), 'ecitulje', '<a href="https://dngstudio.co/">DNG Studio</a>' );
					?>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
