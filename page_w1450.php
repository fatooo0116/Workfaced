<?php
/**
 * 
 *   Template Name: Width 1450px
 * 
 */

get_header();
?>

	<main id="primary" class="max1450">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'blank' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
