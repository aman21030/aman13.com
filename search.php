<?php

get_header();
?>
<div class="home-main">
<?php
echo '<label class="category">', get_search_query(), '</label>';

if ( have_posts() ) :
    if ( !empty( get_search_query() ) ) {
        echo 'の検索の結果（' . $wp_query->found_posts . '件）';
    }
    echo '<ul>' , PHP_EOL;
    while ( have_posts() ) : the_post(); ?>
            <li>
                <div class="article">
                    <div class="label"><?php the_category( ' ' ); ?></div>
                    <?php
                        if ( has_post_thumbnail() ) :
                            the_post_thumbnail( 'full', printf( '<a href="%s">', get_permalink() ), '</a>' );
                        else :
                            echo '<a href="' . get_permalink() . '">';
                            echo '<img src="' . get_template_directory_uri() . '/img/default.png" alt="' . get_the_title() . '">';
                            echo '</a>';
                        endif;
                    ?>
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