<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GrowthSpark
 */

if ( class_exists( 'TitanFramework' ) ) { 
$titan = TitanFramework::getInstance( 'growthspark' );

$activate_cta_3 = $titan->getOption( 'activate_cta_3' );
$mid_cta_text = $titan->getOption( 'mid_cta_text' );
$mid_cta_button_text = $titan->getOption( 'mid_cta_button_text' );
$mid_cta_url = $titan->getOption( 'mid_cta_url' );
$cta_2_color = $titan->getOption( 'secondary_cta_background_color' );



$footer_code = $titan->getOption( 'copyright' );

?>

    </div><!-- container -->

  </div><!-- #content -->


<?php
if ($activate_cta_3  == true) { ?>
  <?php if(!is_front_page()) { ?>
  <style>
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
    background: <?php echo $cta_2_color ; ?>;
    color: white;
    cursor: pointer;  
    border: 2px solid white;

  }
  #call-to-action.secondary-color {
    margin-top: 24px;
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
    background-color: <?php echo  $cta_2_color ; ?>;
  }
  </style>


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
                    <a class="cta-btn animated fadeInUp" href="<?php echo $mid_cta_url; ?>"><?php echo $mid_cta_button_text; ?></a>
                  </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!--// Call to action -->
    <?php } ?>
<?php } ?>



    <section id="footer-widget-area" class="">
      <div class="container">
        <div class="row">
          <div id="footer-widget-area">
            <div class="four columns">

                
                <?php if ( ! dynamic_sidebar( 'first_footer' ) ) : ?>

                <?php endif; ?>

              <!-- #first .widget-area -->


            </div>
            <div class="four columns">

                
                <?php if ( ! dynamic_sidebar( 'second_footer' ) ) : ?>

                <?php endif; ?>

              <!-- #second .widget-area -->


            </div>
            <div class="four columns">

                
                <?php if ( ! dynamic_sidebar( 'third_footer' ) ) : ?>

                <?php endif; ?>

              <!-- #third .widget-area -->

            </div>

          </div><!-- #footer-widget-area -->

        </div>
      </div>
    </section>




  <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
      <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'growthspark' ), 'growthspark', '<a href="https://growthhit.com/" rel="designer">GrowthHit</a>' ); ?>
      <?php if( $footer_code ) : ?><span class="sep"> | </span> <?php echo $footer_code ; ?> <?php endif; ?>
    </div><!-- .site-info -->
  </footer><!-- #colophon -->
</div><!-- #page -->


<?php include('growthpop.php'); ?>

<?php } else { 
// end Titan option check. It's a lonely without it. 
?>


    </div><!-- container -->

  </div><!-- #content -->

<div class="clear clearfix"></div>
    <section id="footer-widget-area" class="">
      <div class="container">
        <div class="row">
          <div id="footer-widget-area">
            <div class="four columns">

                
                <?php if ( ! dynamic_sidebar( 'first_footer' ) ) : ?>

                <?php endif; ?>

              <!-- #first .widget-area -->


            </div>
            <div class="four columns">

                
                <?php if ( ! dynamic_sidebar( 'second_footer' ) ) : ?>

                <?php endif; ?>

              <!-- #second .widget-area -->


            </div>
            <div class="four columns">

                
                <?php if ( ! dynamic_sidebar( 'third_footer' ) ) : ?>

                <?php endif; ?>

              <!-- #third .widget-area -->

            </div>

          </div><!-- #footer-widget-area -->

        </div>
      </div>
    </section>




  <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
      <?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'growthspark' ), 'growthspark', '<a href="https://growthhit.com/" rel="designer">GrowthHit</a>' ); ?>
    </div><!-- .site-info -->
  </footer><!-- #colophon -->
</div><!-- #page -->



<?php } ?>

<?php wp_footer(); ?>
</body>
</html>
