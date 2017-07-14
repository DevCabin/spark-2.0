<?php
/**
 * Template Name: Right Sidebar
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package GrowthSpark
 */

get_header(); 
while ( have_posts() ) : the_post();


?>


    <!-- Page Header -->
    <header class="intro-header">

        <div class="container">
            <div class="row">
                <div class=" twelve columns">
                    <div class="page-heading">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class=" eight columns">
                <?php the_content(); ?>
		
		<?php if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>

            </div>


<?php get_sidebar();?>



        </div>
    </div>


<?php
endwhile; // End of the loop.
get_footer();