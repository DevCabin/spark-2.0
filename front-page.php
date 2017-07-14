<?php
/**
 * Template Name: Front Page Template
 * The front page.
 * @package Growth Spark
 */


if ( class_exists( 'TitanFramework' ) ) {

$titan = TitanFramework::getInstance( 'growthspark' );

// Top Cta
$top_cta_text = $titan->getOption( 'top_cta_text' );
$top_cta_url = $titan->getOption( 'top_cta_url' );
$cta_top_color = $titan->getOption( 'cta_top_color' );
$cta_top_background_color = $titan->getOption( 'cta_top_background_color' );




// Client Logos
$activate_clients = $titan->getOption( 'activate_clients' );
$imageID = $titan->getOption( 'logo_one' );
$imageID2 = $titan->getOption( 'logo_two' );
$imageID3 = $titan->getOption( 'logo_three' );

$imageSrc = $imageID; 
if ( is_numeric( $imageID ) ) {
  $imageAttachment = wp_get_attachment_image_src( $imageID );
  $imageSrc = $imageAttachment[0];
} 

$imageSrc2 = $imageID2; 
if ( is_numeric( $imageID2 ) ) {
  $imageAttachment2 = wp_get_attachment_image_src( $imageID2 );
  $imageSrc2 = $imageAttachment2[0];
} 

$imageSrc3 = $imageID3; 
if ( is_numeric( $imageID3 ) ) {
  $imageAttachment3 = wp_get_attachment_image_src( $imageID3 );
  $imageSrc3 = $imageAttachment3[0];
} 

//Front page content
$content_active = $titan->getOption( 'content_active' );
$content_active_container = $titan->getOption( 'content_active_container' );


// 'About Us' section
$activate_about_us = $titan->getOption( 'activate_about_us' );
$about_us_white = $titan->getOption( 'about_us_white' );
$about_us_title = $titan->getOption( 'about_us_title' );
$about_us_text = $titan->getOption( 'about_us_text' );

$imageID4 = $titan->getOption( 'about_us_image' );
$imageSrc4 = $imageID4; 
if ( is_numeric( $imageID4 ) ) {
  $imageAttachment4 = wp_get_attachment_image_src( $imageID4, 'full' );
  $imageSrc4 = $imageAttachment4[0];
} 


// Secondary CTA
$activate_cta_2 = $titan->getOption( 'activate_cta_2' );
$mid_cta_text = $titan->getOption( 'mid_cta_text' );
$mid_cta_button_text = $titan->getOption( 'mid_cta_button_text' );
$mid_cta_url = $titan->getOption( 'mid_cta_url' );
$cta_2_color = $titan->getOption( 'secondary_cta_background_color' );

// Extra content
$extra_content_active = $titan->getOption( 'extra_content_active' );
$ca_bg_image = $titan->getOption( 'ca_bg_image' );
$extra_content_white = $titan->getOption( 'extra_content_white' );
$extra_content_title = $titan->getOption( 'extra_content_title' );
$extra_content_text = $titan->getOption( 'extra_content_text' );




$imageSrcca_bg_image = $ca_bg_image; 
if ( is_numeric( $ca_bg_image ) ) {
  $imageAttachmentca_bg_image = wp_get_attachment_image_src( $ca_bg_image, 'full' );
  $imageSrcca_bg_image = $imageAttachmentca_bg_image[0];
} 

// Testimonial
$activate_testimonial = $titan->getOption( 'activate_testimonial' );
$testimonial = $titan->getOption( 'testimonial' );


get_header();
?>

</div><!-- container -->

<style>
#slider {
  <?php if ( get_header_image() ) : ?>
    background: url(<?php header_image(); ?>) no-repeat;
  <?php endif; // End header image check. ?>
    padding-top: 25px;
    height: 460px;
    position: relative;
    color: #fff;
    background-color: #111;
    background-position: 50%;
    background-size: cover;
}

/*--------------------------------------------------------------
## Links -> CTA
--------------------------------------------------------------*/
#slider .cta-btn {
    color: <?php echo $cta_top_color; ?>;
    background: <?php echo $cta_top_background_color; ?>;
    width: 200px;
    height: 30px;
    border: 0;
    font-size: 18px;
    border-radius: 4px;
    -webkit-transition: .2s;
    transition: .2s;`
    overflow: hidden;
    text-align: center;
    padding-top: 15px;
    padding-bottom: 13px;
    padding: 15px 30px;
    text-decoration: none;
}

#slider .cta-btn:hover {
  background: <?php echo $cta_top_color; ?>;
  color: <?php echo $cta_top_background_color; ?>;
  cursor: pointer;  
  border: 2px solid <?php echo $cta_top_background_color; ?>;
}

.cta-btn {
    color: <?php echo $cta_2_color; ?>;
    background: white;
    width: 200px;
    height: 30px;
    border: 0;
    font-size: 18px;
    border-radius: 4px;
    -webkit-transition: .2s;
    transition: .2s;
    overflow: hidden;
    text-align: center;
    padding-top: 15px;
    padding-bottom: 13px;
    padding: 15px 30px;
    text-decoration: none;
}
.cta-btn:hover {
  background: <?php echo $cta_2_color; ?>;
  color: white;
  cursor: pointer;  
  border: 2px solid white;

}

.columns {
  position: relative;
}
.malign {
    position: relative;
    margin-top: 25%;
    transform: translateY(-75%);
}


#call-to-action.secondary-color {
  background-size: cover;
  background-attachment: fixed;
  padding: 70px 0px 90px 0;
  position: relative;
  text-align: center;
  color: #fff;
}
#call-to-action.no-bg {
  background-image:none !important;
}
#call-to-action.secondary-color {
  background-color: <?php echo $cta_2_color; ?>;
}

</style>



<!-- FRONT PAGE -->



    <!-- Slider Start -->
    <section id="slider">
      <div class="overlay">
        <div class="container">
          <div class="twelve columns text-center">
            <div class="block animated fadeInUp">


            <?php if ( ! dynamic_sidebar( 'main_cta' ) ) : ?>

              <h1 class="site-description">
                <?php echo get_bloginfo('name'); ?>
              </h1>
              <p class="site-description">
                  <?php echo get_bloginfo('description'); ?>
              </p>

            <?php endif; ?>

            <?php if ($top_cta_text !="") : ?>
              <div class="cta">
                  <a class="cta-btn" href="<?php echo $top_cta_url; ?>"><?php echo $top_cta_text; ?></a>
              </div>
            <?php endif; ?>

              </div>
            </div>
        </div>
      </div>
    </section>




<?php
if ($activate_clients  == true) { ?>
<!-- Social Proof Carousel -->
  <section id="social-proof">
    <div class="container">
      <div class="slider proof">
        <div class="four columns text-center">
          <img src="<?php echo esc_url( $imageSrc ); ?>" alt="">
        </div>
        <div class="four columns text-center">
          <img src="<?php echo esc_url( $imageSrc2 ); ?>" alt="">
        </div>
        <div class="four columns text-center">
          <img src="<?php echo esc_url( $imageSrc3 ); ?>" alt="">
        </div>
      </div>
    </div> 
  </section>
<!--// Social Proof-->
<?php } ?>






<?php
if ($content_active  == true) { ?>



  <section id="front-page-content">

    <?php
    if ($content_active_container  == true) { ?>
    <div class="container">
    <?php } ?>

          <?php while ( have_posts() ) : the_post(); ?>

            <?php the_content();?>

          <?php endwhile; // End of the loop. ?>
    <?php
    if ($content_active_container  == true) { ?>   
    </div>       
    <?php } ?>

  </section>
<?php } ?>









<?php /*
  <!-- Service Start -->
    <section id="service" class="reverse" style="background-color:<?php // echo esc_html__( $service_bg_color;?>">
      <div class="container">
        <div class="row">
          <div class="section-title">
           <?php // echo esc_html__( $services_top;?>
          </div>
        </div>

        <div class="row">
          <div class="four columns">
            <div class="service-item">
              <i class="<?php // echo esc_html__( $block_1_icon; ?>"></i>
              
<?php //echo esc_html__( $service_block_1; ?>

            </div>
          </div>
          <div class="four columns">
            <div class="service-item">
              <i class="<?php // echo esc_html__( $block_2_icon; ?>"></i>

<?php //echo esc_html__( $service_block_2; ?>    

            </div>
          </div>


          <div class="four columns">
            <div class="service-item">
              <i class="<?php // echo esc_html__( $block_3_icon; ?>"></i>

<?php //echo esc_html__( $service_block_3; ?>

            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- // Service -->

*/ ?>



<?php
if ($activate_testimonial  == true) { ?>

    <!-- Testimonial Carousel -->
    <section class="text-center" id="testimonial">

      <div class="container ">
        
        <div id="test-carousel" class="twelve columns ">



        <div class="a-slide">
          <h3>
            <?php echo $testimonial ; ?>
          </h3>
        </div> 




      </div> <!-- //test-carousel -->
                   
      </div><!-- container -->
    </section>
    <!-- // Testimonial Carousel -->
<?php } ?>



<?php
if ($activate_about_us  == true) { ?>



<style>
/**/
#feature {


<?php if ($imageID4 !="#" && $imageID4  !=""){ ?>
background: url('<?php echo esc_url( $imageSrc4 ); ?>');
<?php } else { ?>
background: url('<?php echo get_template_directory_uri(); ?>/inc/img/featue-bg.jpg');
<?php } ?>

  background-position: 50% 94px;
  width: 100%;
  display: block;`
  position: relative;
  overflow: visible;
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-position: center center;
  background-color: #fff;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  padding: 100px 0;
}
/**/
<?php
if ($about_us_white  == true) { ?>
#feature h2, #feature .about-us-raw, #feature .about-us-raw p {
  color: #fff !important;
}
<?php } ?>
</style>

  <section id="feature">
    <div class="container">
      <div class="row">
        <div class="six columns offset-by-six">

              <h2><?php echo $about_us_title ; ?></h2>

              <div class="about-us-raw">
                <?php echo $about_us_text ; ?>
              </div>

        </div>
      </div>
    </div>
  </section>


<?php } ?>



<?php
if ($activate_cta_2  == true) { ?>

    <!-- Call to action Start -->
    <section id="call-to-action" class="secondary-color no-bg">
      <div class="container">
        <div class="row">
          <div class="twelve columns">
            <div class="block">

              <h2>
                <?php echo $mid_cta_text ; ?>
              </h2>

            </div>
            
            <div class="container">
              <div class="text-center">
                  <div class="twelve columns">
                    <a class="cta-btn animated fadeInUp" href="<?php echo $mid_cta_url ; ?>"><?php echo $mid_cta_button_text ; ?></a>
                  </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!--// Call to action -->
<?php } ?>





  



<?php
if ($extra_content_active  == true) { ?>


<style>
/**/
#feature2 {

<?php if ($imageSrcca_bg_image !="#" && $imageSrcca_bg_image  !="") { ?>
background: url('<?php echo esc_url( $imageSrcca_bg_image ); ?>');
<?php } else { ?>
background: url('<?php echo get_template_directory_uri(); ?>/inc/img/featue-bg.jpg');
<?php } ?>

  background-position: 50% 94px;
  width: 100%;
  display: block;
  position: relative;
  overflow: visible;
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-position: center center;
  background-color: #fff;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  padding: 100px 0;
}
/**/
<?php
if ($extra_content_white  == true) { ?>
#feature2 h2, #feature2 .about-us-raw, #feature2 .about-us-raw p {
  color: #fff !important;
}
<?php } ?>
</style>

  <section id="feature2">
    <div class="container">
      <div class="row">
        <div class="six columns">

              <h2><?php echo $extra_content_title ; ?></h2>

              <div class="about-us-raw">
                <?php echo $extra_content_text ; ?>
              </div>

        </div>
      </div>
    </div>
  </section>


<?php } ?>

<div class="container"><!-- container -->

<?php } else { 
// end Titan option check. It's a lonely page without it. 
get_header();
?>

</div><!-- container -->
<style>
#slider {
  <?php if ( get_header_image() ) : ?>
    background: url(<?php header_image(); ?>) no-repeat;
  <?php endif; // End header image check. ?>
    padding-top: 25px;
    height: 460px;
    position: relative;
    color: #fff;
    background-color: #111;
    background-position: 50%;
    background-size: cover;
}
</style>
    <!-- Slider Start -->
    <section id="slider">
      <div class="overlay">
        <div class="container">
          <div class="twelve columns text-center">
            <div class="block animated fadeInUp">


            <?php if ( ! dynamic_sidebar( 'main_cta' ) ) : ?>

              <h1 class="site-description">
                <?php echo get_bloginfo('name'); ?>
              </h1>
              <p class="site-description">
                  <?php echo get_bloginfo('description'); ?>
              </p>

            <?php endif; ?>

              </div>
            </div>
        </div>
      </div>
    </section>


  <section id="front-page-content">

    <div class="container">

          <?php while ( have_posts() ) : the_post(); ?>

            <?php the_content();?>

          <?php endwhile; // End of the loop. ?>

    </div>       

  </section>

<div class="container">
<?php } ?>


<?php get_footer();  ?>    
   