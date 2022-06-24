<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-PKQFM9W');</script>
	<!-- End Google Tag Manager -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PKQFM9W"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php wp_body_open(); ?>
<header>
	<h1>
		<a href="<?php echo esc_url( home_url( '/' ) ) ?>">
			<img src="<?php header_image(); ?>" alt="<?php esc_attr( bloginfo( 'name' ) ) ?>" width="445" height="88">
		</a>
	</h1>
	<nav>
		<?php get_search_form(); ?>
	</nav>
</header>
<nav class="nav-global">
	<?php if ( has_nav_menu( 'global' ) ) : ?>
		<?php wp_nav_menu( array( 'theme_location' => 'global' )); ?>
	<?php endif; ?>
</nav>
<nav class="nav-breadcrumb">
	<?php echo do_shortcode( '[wp-structuring-markup-breadcrumb]' ); ?>
</nav>
<div class="content">
	<main>
