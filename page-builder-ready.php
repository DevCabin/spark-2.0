<?php
/**
 * Template Name: Page Builder Ready (PBR)
 *
 * @package GrowthSpark
 */

get_header(); 
while ( have_posts() ) : the_post();
?>
    <!-- Main Content -->
    <div class="main-content-pagebuilder">

                <?php the_content(); ?>

		<?php if ( comments_open() || get_comments_number() ) :
				comments_template();
		endif; ?>

    </div>

<?php
endwhile; // End of the loop.
get_footer();