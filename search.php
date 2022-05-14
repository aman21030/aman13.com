<?php

get_header();
?>
<div class="home-main">
<?php
echo '<label class="category">', get_search_query(), '</label>';

if ( have_posts() ) :
    echo 'の検索の結果<ul>' , PHP_EOL;
    while ( have_posts() ) : the_post(); ?>
        <li>
        <div class="label"><?php the_category( ' ' ); ?></div>
        <div class="article">
            <?php the_post_thumbnail( 'full', printf( '<a href="%s">', get_permalink() ), '</a>' ); ?>
            <time><?php the_time( get_option( 'date_format' ) . ' ' . get_option( 'time_format' ) ); ?></time>
            <?php the_title( sprintf( '<a href="%s"><h2>', get_permalink() ), '</h2></a>' ); ?>
        </div>
        </li>
    <?php endwhile;
    echo '</ul>' , PHP_EOL;
else :
    echo '<br>に関する記事は見つかりませんでした。。。';
endif;
?>
</div>
<?php
the_posts_pagination( array(
	'before_page_number' => '',
	'next_text'          => '>',
	'prev_text'          => '<',
	'show_all'           => __return_true(),
	'screen_reader_text' => 'Post Navigation'
) );

get_footer();