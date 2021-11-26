<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecitulje
 */

get_header();
?>

	<main id="primary" class="site-main">



	<div class="container my-5">

				<?php if ( have_posts() ) : ?>


					<header class="page-header">
						<?php
						the_archive_title( '<h1 class="page-title">', '</h1>' );
						the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</header><!-- .page-header -->


					<div class="grid">
					<div class="grid-sizer"></div>
					<div class="gutter-sizer"></div>

					<?php

					
					/* Start the Loop */
				while ( have_posts() ) : the_post();?>
					
					
						<div class="grid-item <?php if( get_field('naglasena_objava') ): ?> <?php echo 'highlight'; ?><?php endif; ?>
							<?php if( get_field('velicina') == 'Srednja' ): ?> <?php echo 'grid-item--width2'; ?><?php elseif( get_field('velicina') == 'Velika' ): ?> <?php echo 'grid-item--width3'; ?>  <?php endif; ?>">
							<div class="card text-center border border-primary p-5">
							<?php get_template_part( 'template-parts/content', get_post_type() );?>
							</div>
						</div>
					
			
					

				<?php endwhile; // End of the loop. ?>
				</div>

				<?php				the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

</div>


	</main><!-- #main -->

<?php
get_footer();
