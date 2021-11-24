<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ecitulje
 */

get_header();
?>


		<main id="primary" class="site-main">

			<?php
			while ( have_posts() ) :
				the_post(); ?>
				
				<div class="container card my-5 border border-primary p-5 text-center" >


				<?php get_template_part( 'template-parts/content', get_post_type() ); ?>

				</div>

				<div class="container mb-5">


				<?php

				the_post_navigation(
					array(
						'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Prethodna:', 'ecitulje' ) . '</span> <span class="nav-title">%title</span>',
						'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Sledeća:', 'ecitulje' ) . '</span> <span class="nav-title">%title</span>',
					)
				);

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif; ?>

				</div>

			<?php
			endwhile; // End of the loop.
			?>

		</main><!-- #main -->




<?php
get_footer();
