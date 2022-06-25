<?php

get_header();

if ( have_posts() ) : ?>
    <article class="single-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_title( '<h1>', '</h1>' ); ?>
    <div class="article-time">投稿日<time><?php the_time( get_option( 'date_format' ) . ' ' . get_option( 'time_format' ) ); ?></time></div>
    <div class="article-time">更新日<time><?php the_modified_date( get_option( 'date_format' ) . ' ' . get_option( 'time_format' ) ); ?></time></div>
    <p><?php the_author(); ?></p>
    <?php the_content(); ?>
    </article>
<?php endif; ?>

<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
	<?php echo get_avatar( get_the_author_meta( 'user_email' ), 60, '', esc_html( get_the_author() ) ); ?>
</a>
<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
	<?php esc_html( the_author() ); ?>
</a>
<?php esc_html( the_author_meta( 'description' ) ); ?>

<div class="comments">
    <?php
        if ( comments_open() || get_comments_number() ) {
	    comments_template();
        }
    ?>
</div>
<?php 
echo '<div class="pagenation">';
previous_post_link();
echo '<span class="pagenation-space"></span>';
next_post_link();
echo '</div>';

get_footer();