<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecitulje
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	

		<?php
			$taxonomy = 'tipovi';
			$terms = get_the_terms( $post->ID , 'tipovi' );
			foreach ( $terms as $term ) { ?>
			<div class="flair-wrapper">
			<div class="flair"><a class="text-white" href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a></div>
			</div>
		<?php } ?>
		

		<p style="margin:0px"><?php the_field('datum_objave'); ?></p>
		
		<?php
			$taxonomy = 'mesto';
			$terms = get_the_terms( $post->ID , 'mesto' );
			foreach ( $terms as $term ) { ?>
			<a href="<?php echo get_term_link($term->slug, $taxonomy); ?>"><?php echo $term->name; ?></a>
		<?php } ?>
		
		<h4 class="my-3"><?php the_field('znak'); ?></h4>
	

	<div class="thumb">
		
		<?php if ( has_post_thumbnail() ) { 
		the_post_thumbnail( 'thumbnail' ); 
		} ?>
	</div>

	

	<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title mt-4">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title mt-4"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				ecitulje_posted_on();
				ecitulje_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ecitulje' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		?>


						





		
		<p class="fw-bold"><?php the_field('ozalosceni'); ?></p>


		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ecitulje' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php ecitulje_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
