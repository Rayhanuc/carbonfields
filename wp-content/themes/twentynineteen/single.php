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

                get_template_part( 'template-parts/content/content', 'single' );
                
                echo "========================<br/>";
                // echo carbon_get_the_post_meta('prefix_image')."<br/>";
                $prefix_image_source = wp_get_attachment_image_src(carbon_get_the_post_meta('prefix_image'),'large');
                echo "<img src='".esc_url($prefix_image_source[0])."'><br/>";
                echo "========================<br/>";
                $images = carbon_get_the_post_meta('prefix_gallery');
                // print_r($images)."<br/>";
                foreach($images as $image){
                    echo wp_get_attachment_image($image);
                }
                echo "========================<br/>";
                print_r(carbon_get_the_post_meta('prefix_ms'));
                echo "========================<br/><pre>";
                print_r(carbon_get_the_post_meta('crb_slides'));
                echo "</pre><br/>========================<br/>";

				if ( is_singular( 'attachment' ) ) {
					// Parent post navigation.
					the_post_navigation(
						array(
							/* translators: %s: Parent post link. */
							'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentynineteen' ), '%title' ),
						)
					);
				} elseif ( is_singular( 'post' ) ) {
					// Previous/next post navigation.
					the_post_navigation(
						array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'twentynineteen' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Next post:', 'twentynineteen' ) . '</span> <br/>' .
								'<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'twentynineteen' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Previous post:', 'twentynineteen' ) . '</span> <br/>' .
								'<span class="post-title">%title</span>',
						)
					);
				}

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
