<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ecitulje
 */

get_header();
?>

<div class="container my-5">
    <div class="card py-3 text-center">
    <div class="card-body">
        <h5 class="card-title">Pošaljite zahtev za objavu</h5>
        <h6 class="card-subtitle mb-2 text-muted">Čitulja, poslednji pozdrav, pomen ili in memoriam</h6>
        <p class="card-text">Posvetite umrloj osobi objavu i obavestite njene najbliže o datumu sahrane.</p>
        <a  class="btn btn-primary" href="localhost/dodajte-objavu">Dodajte objavu</a>
        <a href="#" class="card-link">Kako se dodaje objava?</a>
    </div>
    </div>


    <h2 class="text-center mt-5 mb-4">Istaknute objave</h2>

    <?php
        $loop = new WP_Query( array(
            'post_type' => 'objave',
            'posts_per_page' => 16,
            'post_status' => 'publish',
            'tax_query' => array(
                array(
                    'taxonomy' => 'video_type',
                    'terms' => 'episode',
                    'field' => 'slug',
                    'include_children' => true,
                    'operator' => 'IN'
                )
            ),
            
        )
        );
        ?>
        
        <div class="grid">
            <div class="grid-sizer"></div>
            <div class="gutter-sizer"></div>

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        
            <div class="grid-item">
                <div class="card text-center border border-primary p-5">
                <?php get_template_part( 'template-parts/content', get_post_type() );?>
                </div>
			</div>
        
        <?php endwhile; wp_reset_query(); ?>
    </div>

    <h2 class="text-center mt-5 mb-4">Najnovije objave</h2>
    
    <?php
        $loop = new WP_Query( array(
            'post_type' => 'objave',
            'posts_per_page' => 16,
            'post_status' => 'publish'
        )
        );
        ?>
        
        <div class="grid">
            <div class="grid-sizer"></div>
            <div class="gutter-sizer"></div>

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

        
        <div class="grid-item <?php if( get_field('naglasena_objava') ): ?> <?php echo 'highlight'; ?><?php endif; ?>
            <?php if( get_field('velicina') == 'Srednja' ): ?> <?php echo 'grid-item--width2'; ?><?php elseif( get_field('velicina') == 'Velika' ): ?> <?php echo 'grid-item--width3'; ?>  <?php endif; ?>">
            <div class="card text-center border border-primary p-5">
            <?php get_template_part( 'template-parts/content', get_post_type() );?>
            </div>
        </div>
        
        <?php endwhile; wp_reset_query(); ?>
    </div>
    

</div>






<?php
get_footer();