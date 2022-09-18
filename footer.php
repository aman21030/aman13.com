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
        <a href="https://twitter.com/<?php echo $sns['twitter_account']; ?>" target="_blank">
            <span class="dashicons dashicons-twitter footer-icon" style="color:<?php echo $sns['twitter_color']; ?>;"></span>
            <span style="color:<?php echo $sns['twitter_color']; ?>;"><?php echo $sns['twitter_account']; ?></span>
        </a>
        </div>
        <div>
        <a href="https://www.facebook.com/<?php echo $sns['facebook_account']; ?>" target="_blank">
            <span class="dashicons dashicons-facebook footer-icon" style="color:<?php echo $sns['facebook_color']; ?>;"></span>
            <span style="color:<?php echo $sns['facebook_color']; ?>;"><?php echo $sns['facebook_account']; ?></span>
        </a>
        </div>
        <div>
        <a href="https://www.instagram.com/<?php echo $sns['instagram_account']; ?>" target="_blank">
            <span class="dashicons dashicons-instagram footer-icon" style="color:<?php echo $sns['instagram_color']; ?>;"></span>
            <span style="color:<?php echo $sns['instagram_color']; ?>;"><?php echo $sns['instagram_account']; ?></span>
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