<?php
/**
 * 
 *   Template Name: Cart
 * 
 */

get_header('cart');
?>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'home' );


		endwhile; // End of the loop.
		?>

<?php
// get_sidebar();
get_footer();
