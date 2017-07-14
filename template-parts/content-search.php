<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package GrowthSpark
 */
$img_path = "#";
if ( has_post_thumbnail() ) {
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'page-headers', true);
    $thumb_url = $thumb_url_array[0];
    $img_path = $thumb_url;
}


?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ($img_path != "#") { ?>
	<a href="<?php the_permalink();?>">
	 <div class="intro-header" style="background-image: url('<?php echo $img_path; ?>');width: 100%;height: 200px;background-size: cover;">

	 </div>
	</a>
	<?php } ?>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php growthspark_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
		<span class="readmore">
			<a title="Read <?php the_title();?>" href="<?php the_permalink();?>">Read More</a>
		</span>
	</div><!-- .entry-summary -->


</article><!-- #post-## -->
