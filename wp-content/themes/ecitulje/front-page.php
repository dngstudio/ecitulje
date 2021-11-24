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
        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a  class="btn btn-primary" href="localhost/dodajte-objavu">Dodajte objavu</a>
        <a href="#" class="card-link">Kako se dodaje objava?</a>
    </div>
    </div>


    <h2 class="text-center mt-5 mb-4">Istaknute objave</h2>
    <h2 class="text-center mt-5 mb-4">Najnovije objave</h2>
    
    <div><div class="row">
        <?php
            $recent_posts = wp_get_recent_posts(array('post_type'=>'objave'));
            
            foreach( $recent_posts as $recent ){
                echo '<div class="col-3"><div class="card py-3 text-center"><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </div></div> ';
            }
        ?>
        </div>
    </div>


</div>






<?php
get_footer();