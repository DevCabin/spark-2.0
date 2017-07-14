<?php
/**
 * Template Name: PBR With Container
 *
 * @package GrowthSpark
 */

get_header(); 
while ( have_posts() ) : the_post();
?>

	<div class="container">
	    <!-- Main Content -->
	    <div class="main-content-pagebuilder">

	                <?php the_content(); ?>

			<?php if ( comments_open() || get_comments_number() ) :
					comments_template();
			endif; ?>

	    </div>
    </div>

<?php
endwhile; // End of the loop.
get_footer();