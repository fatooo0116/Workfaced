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
<div id="page" class="site">
	
	<header id="header_top" class="site-header">
		<div class="topimg_svg">
			
					<svg version="1.1" id="圖層_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						viewBox="0 0 2557 122" style="enable-background:new 0 0 2557 122;" xml:space="preserve">
					<style type="text/css">
						.st0{fill:url(#SVGID_1_);}
					</style>
					<g>
						<g>
							<radialGradient id="SVGID_1_" cx="1278.7645" cy="65.3385" r="906.0823" gradientUnits="userSpaceOnUse">
								<stop  offset="0" style="stop-color:#70BD6B"/>
								<stop  offset="0.0274" style="stop-color:#91AE74"/>
								<stop  offset="0.0614" style="stop-color:#B39F7D"/>
								<stop  offset="0.0962" style="stop-color:#CE9384"/>
								<stop  offset="0.1315" style="stop-color:#E18B89"/>
								<stop  offset="0.1678" style="stop-color:#EC868C"/>
								<stop  offset="0.2064" style="stop-color:#F0848D"/>
								<stop  offset="0.3353" style="stop-color:#4CC7F1"/>
								<stop  offset="0.4669" style="stop-color:#FDEF51"/>
								<stop  offset="0.6405" style="stop-color:#F0848D"/>
								<stop  offset="0.7574" style="stop-color:#FDEF51"/>
								<stop  offset="0.8708" style="stop-color:#7DBBDC"/>
								<stop  offset="1" style="stop-color:#70BD6B"/>
							</radialGradient>
							<path class="st0" d="M-1.37,120.84c214.93,0,429.86,0,644.79,0c217.11,0,434.21-1.32,651.32-1.32c108.87,0,217.74,0,326.6,0
								c54.35,0,108.7,0,163.06,0c26.69,0,53.39,0.15,80.08-0.01c25.08-0.16,50.58-1.41,74.65-9.06c26.26-8.34,53.8-26.29,59.4-55.13
								c2.83-14.56-3.49-50.54-25.87-44.47c-4.97,1.35-9.97,5.71-12.23,9.97c-4.33,8.17-8.04,37.64,8.64,30.03
								c10.48-4.78,5.43-17.53,0.73-25.05c-6.89-11-19.18-21.41-32.42-14.68c-9.02,4.58-14.34,13.37-16,23.23
								c-7.95,47.29,41.4,66.59,77.73,76.59c24.57,6.77,51.28,6.96,76.6,8.66c26.45,1.78,52.97,2.32,79.47,2.41
								c106.52,0.38,213.06-0.32,319.59-0.32c26.83,0,53.66,0,80.49,0c1.23,0,2.44-2.1,3.64-2.1c-98.53,0-197.06,0-295.6,0
								c-48.06,0-96.17,1.1-144.22-0.25c-46.73-1.31-93.57-3.29-138.4-17.1c-18.86-5.81-38.08-16.48-48.65-33.76
								c-10.45-17.08-12.08-44.98,5.9-57.66c-1.21,0.7-2.42,1.4-3.64,2.1c17.94-8.47,48.7,23.01,33.88,38.43c1.21-0.7,2.42-1.4,3.64-2.1
								c-18.84,6.81-10.27-30.81-1.92-37.18c-1.21,0.7-2.42,1.4-3.64,2.1c12.19-5.37,22.01,5.27,26.38,15.88
								c5.59,13.57,3.65,29.71-2.99,42.55c-15.71,30.34-52.42,39.78-83.82,43.09c-32.41,3.42-65.51,1.73-98.05,1.73
								c-34.61,0-69.21,0-103.82,0c-137.75,0-275.5,0-413.25,0c-276.69,0-553.36,1.32-830.05,1.32c-152.8,0-305.59,0-458.39,0
								C1.04,118.74-0.17,120.84-1.37,120.84L-1.37,120.84z"/>
						</g>
					</g>
					</svg>
		</div>
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


			<div id="page_header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div><!-- end page_header -->
		</div><!-- .site-branding -->


		

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
