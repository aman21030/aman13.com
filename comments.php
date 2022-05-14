<?php
if ( post_password_required() ) {
	return;
}
?>
<section>
	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p>Comments are closed.</p>
	<?php endif; ?>

	<?php
		comment_form( array(
			'title_reply_before' => '<h2>',
			'title_reply_after'  => '</h2>',
		) );
	?>
</section>

<?php if ( have_comments() ) : ?>
	<section>
		<header>
			<h2>
				<?php
					$comments_number = get_comments_number();
					if ( 1 === $comments_number ) {
						printf( 'One thought on &ldquo;%s&rdquo;comments title', get_the_title() );
					} else {
						printf(
							_nx(
								'%1$s thought on &ldquo;%2$s&rdquo;',
								'%1$s thoughts on &ldquo;%2$s&rdquo;',
								$comments_number,
								'comments title'
							),
							number_format_i18n( $comments_number ),
							get_the_title()
						);
					}
				?>
			</h2>
		</header>

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 42,
				) );
			?>
		</ol>

		<?php the_comments_navigation(); ?>
	</section>
<?php endif;