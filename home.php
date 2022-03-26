<?php

get_header();

if ( have_posts() ) :
    echo '<ul>' , PHP_EOL;
    while ( have_posts() ) : the_post(); ?>
        <li>
        <time><?php the_time( get_option( 'date_format' ) . ' ' . get_option( 'time_format' ) ); ?></time>
        <?php the_title( '<h1>', '</h1>' ); ?>
        </li>
    <?php endwhile;
    echo '</ul>' , PHP_EOL;
endif;

get_footer();