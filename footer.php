    </main>
    <div class="r-wrapper">
        <?php get_sidebar( 'sidebar-1' ); ?>
    </div>
</div>
<footer>
    <div class="icon-area">
        <?php 
            $sns = get_option( 'dashicons_list_view' );
        ?>
        <div>
        <a href="https://twitter.com/<?php echo $sns['twitter_account']; ?>">
            <span class="dashicons dashicons-twitter footer-icon" style="color:<?php echo $sns['twitter_color']; ?>;"></span>
            <p><?php echo $sns['twitter_account']; ?></p>
        </a>
        </div>
        <div>
        <a href="https://www.facebook.com/tomomi.aman">
            <span class="dashicons dashicons-facebook footer-icon"></span>
            <p>tomomi.aman</p>
        </a>
        </div>
        <div>
        <a href="https://www.instagram.com/aman901030/?hl=ja">
            <span class="dashicons dashicons-instagram footer-icon"></span>
            <p>aman901030</p>
        </a>
        </div>
    </div>
    <p><small>&copy;&nbsp;<?php bloginfo( 'name' ); ?>&nbsp;All&nbsp;rights&nbsp;reserved.</small></p>
</footer>
<div id="move-to-the-top" class="move-to-the-top">
    <span class="dashicons dashicons-arrow-up-alt2"></span>
</div>
<?php wp_footer(); ?>
</body>
</html>