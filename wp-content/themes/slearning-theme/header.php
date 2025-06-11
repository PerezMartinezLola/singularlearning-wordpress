<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package slearning-theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header">
	<div class="site-branding">
		<?php
		// Mostrar logo sin enlace
		$custom_logo_id = get_theme_mod('custom_logo');
		$logo_url = wp_get_attachment_image_src($custom_logo_id, 'full');

		if ( $logo_url ) {
			echo '<img src="' . esc_url($logo_url[0]) . '" alt="' . get_bloginfo('name') . '" class="custom-logo">';
		}

		if ( is_front_page() && is_home() ) :
			?>
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</h1>
		<?php else : ?>
			<p class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			</p>
		<?php
		endif;

		$slearning_theme_description = get_bloginfo( 'description', 'display' );
		if ( $slearning_theme_description || is_customize_preview() ) :
			?>
			<p class="site-description"><?php echo $slearning_theme_description; ?></p>
		<?php endif; ?>
	</div><!-- .site-branding -->

	<nav id="site-navigation" class="main-navigation">
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"></button>
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			)
		);
		?>
	</nav><!-- #site-navigation -->
</header><!-- #masthead -->

<main id="main" class="site-main">

<?php
/*
-----------------------------------------------
Código antiguo que mostraba el logo con enlace:
-----------------------------------------------
the_custom_logo();

if ( is_front_page() && is_home() ) :
?>
	<h1 class="site-title">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
	</h1>
<?php else : ?>
	<p class="site-title">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
	</p>
<?php
endif;

$slearning_theme_description = get_bloginfo( 'description', 'display' );
if ( $slearning_theme_description || is_customize_preview() ) :
?>
	<p class="site-description"><?php echo $slearning_theme_description; ?></p>
<?php endif; ?>

wp_nav_menu(
	array(
		'theme_location' => 'menu-1',
		'menu_id'        => 'primary-menu',
	)
);
*/
?>
