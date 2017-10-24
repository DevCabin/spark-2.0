<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GrowthSpark
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php

if ( class_exists( 'TitanFramework' ) ) {

  $titan = TitanFramework::getInstance( 'growthspark' );
  $sub_page_head = $titan->getOption( 'sub_page_head' );
  $sb_style = $titan->getOption( 'sb_style' );
  $imageIDl = $titan->getOption( 'site_logo' );

  $imageSrcl = $imageIDl;
  if ( is_numeric( $imageIDl ) ) {
    $imageAttachmentl = wp_get_attachment_image_src( $imageIDl, 'full' );
    $imageSrcl = $imageAttachmentl[0];
  }

}
do_action("g_head");
?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'growthspark' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="container">
			<div class="two columns">
				<div class="site-branding">

<?php

if ( class_exists( 'TitanFramework' ) ) {
$titan = TitanFramework::getInstance( 'growthspark' );
?>
<!--
And the image URL is:
<?php echo esc_url( $imageSrcl ); ?>
-->
					<?php if ( !is_front_page() && !is_home() ) : ?>

							<?php if ($imageSrcl !="#" && $imageSrcl !="") { ?>
							<div class="site-title-logo">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
									<img id="site-logo" src="<?php echo esc_url( $imageSrcl ); ?>" alt="<?php bloginfo( 'name' ); ?> logo">
								</a>
							</div>
							<?php } else { ?>
							<div class="site-title-logo">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
							</div>
							<?php } ?>

					<?php else : ?>
						<div class="site-title-logo">
							<?php if ($imageSrcl !="#" && $imageSrcl !="") { ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<img id="site-logo" src="<?php echo esc_url( $imageSrcl ); ?>" alt="<?php bloginfo( 'name' ); ?> logo">
							</a>
							<?php } else { ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
							<?php } ?>
						</div>
					<?php endif; ?>
<?php } else { ?>

						<div class="site-title-logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
							</a>
						</div>
<?php } ?>

				</div><!-- .site-branding -->
			</div><!-- two col -->
			<div class="ten columns">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'MENU', 'growthspark' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</div><!-- ten col -->
		</div><!-- container -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
<?php if(!is_front_page()) { ?>

	<?php
	if ( class_exists( 'TitanFramework' ) ) {

		if ( $sub_page_head == true ) { ?>
			<style>
			#slider {
			  <?php if ( get_header_image() ) : ?>
			    background: url(<?php header_image(); ?>) no-repeat;
			  <?php endif; // End header image check. ?>
			    padding-top: 25px;
			    height: 100px;
			    position: relative;
			    color: #fff;
			    background-color: #111;
			    background-position: 50%;
			    background-size: cover;
			}
			#content {
			    margin-top: 0px !important;
			}
			</style>

		    <!-- Slider Start -->
		    <section id="slider">
		      <div class="overlay">

		      </div>
		    </section>
		<?php } ?>
	<?php } ?>
<?php } ?>
		<div class="container">
