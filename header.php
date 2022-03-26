<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header>
	<h1>
		<a href="<?php esc_url( home_url( '/' ) ) ?>">
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
<div class="l-wrapper">
	<?php get_sidebar( 'sidebar-1' ); ?>
	<main>