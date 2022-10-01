    </main>
    <div class="r-wrapper">
        <?php get_sidebar( 'sidebar-1' ); ?>
    </div>
</div>
<footer>
    <div class="icon-area">
    <?php
        if ( shortcode_exists( 'dashicons-list-view' ) ) {
	        echo do_shortcode( '[dashicons-list-view]' );
        }
    ?>
    </div>
    <p><small>&copy;&nbsp;<?php bloginfo( 'name' ); ?>&nbsp;All&nbsp;rights&nbsp;reserved.</small></p>
</footer>
<div id="move-to-the-top" class="move-to-the-top">
    <span class="dashicons dashicons-arrow-up-alt2"></span>
</div>
<?php wp_footer(); ?>
</body>
</html>