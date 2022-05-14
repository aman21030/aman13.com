<?php

get_header();

if ( have_posts() ) : ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php the_title( '<h1>', '</h1>' ); ?>
    投稿日<time><?php the_time( get_option( 'date_format' ) . ' ' . get_option( 'time_format' ) ); ?></time>
    更新日<time><?php the_modified_date( get_option( 'date_format' ) . ' ' . get_option( 'time_format' ) ); ?></time>
    <p><?php the_author(); ?></p>
    <?php the_content(); ?>
    </article>
<?php endif;

echo '<div class="pagenation">';
previous_post_link();
echo '<span class="pagenation-space"></span>';
next_post_link();
echo '</div>';
?>

<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
	<?php echo get_avatar( get_the_author_meta( 'user_email' ), 60, '', esc_html( get_the_author() ) ); ?>
</a>
<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
	<?php esc_html( the_author() ); ?>
</a>
<?php esc_html( the_author_meta( 'description' ) );

if ( comments_open() || get_comments_number() ) {
	comments_template();
}

get_footer();