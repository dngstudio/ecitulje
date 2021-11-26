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

	<footer id="colophon" class="site-footer bg-black">
		<div class="container pt-5">
			<div class="row">
				<div class="col">
					<h5 class="text-white">Najvažnije stranice</h5>
					<ul class="list-group list-group-flush footer-list bg-black">
						<li class="list-group-item text-light"><a href="">Naslovna</a></li>
						<li class="list-group-item text-light"><a href="">Sve objave</a></li>
						<li class="list-group-item text-light"><a href="">Kategorije</a></li>
						<li class="list-group-item text-light"><a href="">Dodajte svoju objavu</a></li>
					</ul>
				</div>
				<div class="col">
					<h5 class="text-white">Za korisnike</h5>
					<ul class="list-group list-group-flush footer-list bg-black">
						<li class="list-group-item text-light"><a href="">Kako se postavlja objava?</a></li>
						<li class="list-group-item text-light"><a href="">Cenovnik</a></li>
						<li class="list-group-item text-light"><a href="nacini-placanja">Načini plaćanja</a></li>
						<li class="list-group-item text-light"><a href="">Korisne informacije</a></li>
						<li class="list-group-item text-light"><a href="">Kontaktirajte podršku</a></li>
					</ul>
				</div>
				<div class="col">
					<h5 class="text-white">O nama</h5>
					<ul class="list-group list-group-flush footer-list bg-black">
						<li class="list-group-item text-light"><a href="pravila-i-uslovi-koriscenja">Uslovi korišćenja</a></li>
						<li class="list-group-item text-light"><a href="">Politika privatnosti</a></li>
						<li class="list-group-item text-light"><a href="">Podaci o preduzetniku</a></li>
					</ul>
				</div>
				<div class="col">
					<h5 class="text-white">Portal eČitulje</h5>
					<p class="text-white"></p>
				</div>
			</div>
		</div>
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
