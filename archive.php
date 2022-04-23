<?php

get_header();

if ( have_posts() ) :
    the_archive_title();
    the_archive_description();
    echo '<ul>' , PHP_EOL;
    while ( have_posts() ) : the_post(); ?>
        <li>
        <?php the_category( ',' ); ?>
        <?php the_post_thumbnail( 'full' ); ?>
        <time><?php the_time( get_option( 'date_format' ) . ' ' . get_option( 'time_format' ) ); ?></time>
        <?php the_title( printf( '<h2><a href="%s">', get_permalink() ), '</a></h2>' ); ?>
        </li>
    <?php endwhile;
    echo '</ul>' , PHP_EOL;
endif;

the_posts_pagination( array(
	'before_page_number' => '',
	'next_text'          => 'Next',
	'prev_text'          => 'Prev',
	'show_all'           => __return_true(),
	'screen_reader_text' => 'Post Navigation'
) );

get_footer();