<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package workfaced
 */

get_header('cart');
?>


		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'product');

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'workfaced' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'workfaced' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

		endwhile; // End of the loop.
		?>

<div class="clear_both"></div>		
<div class="bottom_box  max1450">
	<div  class="item">
		<h3>RETURNS & REFUNDS</h3>
		<div class="content">Due to the sterile, hygienic and personal nature of disposable face masks, all sales are final. We do not issue refunds, accept cancellations, or allow exchanges to be made. </div>
	</div>

	<div  class="item">
		<h3>RETURNS & REFUNDS</h3>
		<div class="content">Due to the sterile, hygienic and personal nature of disposable face masks, all sales are final. We do not issue refunds, accept cancellations, or allow exchanges to be made. </div>
	</div>
	
	<div  class="item">
		<h3>RETURNS & REFUNDS</h3>
		<div class="content">Due to the sterile, hygienic and personal nature of disposable face masks, all sales are final. We do not issue refunds, accept cancellations, or allow exchanges to be made. </div>
	</div>	
</div>


<?php
// get_sidebar();
get_footer();
