<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			// Start the Loop.
			while ( have_posts() ) :
				the_post();

                get_template_part( 'template-parts/content/content', 'page' );
                
                // data show from current post
                echo "==================<br/>";
                echo __("Address: ","twentynineteen").carbon_get_the_post_meta('prefix_address')."<br/>";
                echo __("Opening Hours: ","twentynineteen").carbon_get_the_post_meta('prefix_opening')."<br/>";
                echo __("Opening: ","twentynineteen").carbon_get_the_post_meta('prefix_open')."<br/>";
                echo "==================";

                // data show from another post
                // carbon_get_post_meta(get_the_ID(),'prefix_opening');

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
