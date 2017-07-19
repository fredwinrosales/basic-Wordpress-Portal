<?php

/*
    Template Name: Template Example
 */

get_header();
?>

<?php if( have_posts() ):

    while( have_posts() ): the_post(); ?>

        <h3>This is my static title</h3>

        <small>Post on: <?php the_time('F j, Y'); ?> at <?php the_time('g:i a')?>, in <?php the_category(); ?></small>

        <p><?php the_content(); ?></p>

    <?php endwhile;

endif;

?>