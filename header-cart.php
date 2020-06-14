<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package workfaced
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<div id="page" class="toppage">
	
	<header id="header_top" class="toppage-header">
		
		<div class="site-branding">
			<a href="<?php echo  home_url('/'); ?>" class="logo"><img src="/wp-content/uploads/2020/06/logo.svg"  title="workfaced" /></a>
			<?php
			/// the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$workfaced_description = get_bloginfo( 'description', 'display' );
			if ( $workfaced_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $workfaced_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>			
		</div><!-- .site-branding -->

		<a href="<?php echo wc_get_cart_url(); ?>"  class="cart">
		
				<?php 
					global $woocommerce;					
					$num =   $woocommerce->cart->cart_contents_count;
				?>
				<?php if($num>0){ ?><div class="num"><?php echo $num; ?></div><?php } ?>
			<img src="/wp-content/uploads/2020/06/cart.svg" />
		</a>


		

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'workfaced' ); ?></button>
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
