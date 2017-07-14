<?php
/**
 * Template Name: Left Sidebar
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package GrowthSpark
 */

get_header(); 
while ( have_posts() ) : the_post();


?>

    <!-- Page Header -->

    <header class="intro-header">

        
            <div class="row">
                
                <div class="eight columns offset-by-four">
                    <div class="page-heading">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

                        <!--span class="subheading">This is what I do.</span-->
                    </div>
                </div>
            </div>
        
    </header>

    <!-- Main Content -->
    
        <div class="row">

<?php get_sidebar();?>


            <div class=" eight columns">
                <?php the_content(); ?>
		
		<?php if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>

            </div>




        </div>
   


<?php
endwhile; // End of the loop.
get_footer();