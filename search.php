<?php

get_header();

echo get_search_query();

if ( have_posts() ) :
    echo '<ul>' , PHP_EOL;
    while ( have_posts() ) : the_post(); ?>
        <li>
        <time><?php the_time( get_option( 'date_format' ) . ' ' . get_option( 'time_format' ) ); ?></time>
        <?php the_title( printf( '<h1><a href="%s">', get_permalink() ), '</a></h1>' ); ?>
        <?php the_category( ',' ); ?>
        <?php the_post_thumbnail( 'full' ); ?>
        </li>
    <?php endwhile;
    echo '</ul>' , PHP_EOL;
else :
    echo '見つかりませんでした。。。';
endif;

the_posts_pagination( array(
	'before_page_number' => '',
	'next_text'          => 'Next',
	'prev_text'          => 'Prev',
	'show_all'           => __return_true(),
	'screen_reader_text' => 'Post Navigation'
) );

get_footer();