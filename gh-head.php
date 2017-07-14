<?php 
$titan = TitanFramework::getInstance( 'growthspark' );
$sub_page_head = $titan->getOption( 'sub_page_head' );
$typo = $titan->getOption( 'typo' );
$main_nav_left_or_right = $titan->getOption( 'main_nav_left_or_right' );

$sb_style = $titan->getOption( 'sb_style' );

$head_code = $titan->getOption( 'custom_head_code' );

$imageIDl = $titan->getOption( 'site_logo' );

$imageSrcl = $imageIDl; 
if ( is_numeric( $imageIDl ) ) {
  $imageAttachmentl = wp_get_attachment_image_src( $imageIDl, 'full' );
  $imageSrcl = $imageAttachmentl[0];
} 



if ($typo == "f_oswald") { ?>
<link href="https://fonts.googleapis.com/css?family=Montserrat|Oswald" rel="stylesheet">
<style>
/*
Mr Oswald
*/

h1,
h2,
h3,
h4,
h5,
h6 {
	font-family: 'Oswald', sans-serif;
	text-transform: uppercase;

}

body,
button,
input,
select,
textarea {
	font-family: 'Montserrat', sans-serif;
	text-transform: none;
}
</style>
<?php } elseif ($typo == "f_libre_r") { ?>
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Roboto:900" rel="stylesheet">
<style>
/*
Libre Roboto
*/
h1,
h2,
h3,
h4,
h5,
h6 {
	font-family: 'Roboto', sans-serif;
	text-transform: none;
}

body,
button,
input,
select,
textarea {
	font-family: 'Libre Baskerville', serif;
	text-transform: none;
}
</style>
<?php } elseif ($typo == "f_julius") { ?>
<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|Julius+Sans+One|Source+Sans+Pro" rel="stylesheet">
<style>
/*
Julius Archivo
*/
h1,
h3,
h5,{
	font-family: 'Julius Sans One', sans-serif;
	text-transform: uppercase;
	text-transform: none;
}
h2,
h4,
h6 {
	font-family: 'Archivo Narrow', sans-serif;
	text-transform: uppercase;
}
body{
	font-family: 'Source Sans Pro', sans-serif;
	text-transform: none;
}
</style>
<?php } elseif ($typo == "f_hound") { ?>
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
<style>
/*
Hound of the Baskerville
*/
h1,
h3,
h5,
body,
button,
input,
select,
textarea {
	font-family: 'Libre Baskerville', serif;
	text-transform: none;
}
h2,
h4,
h6 {
	font-family: 'Libre Baskerville', serif;
	text-transform: uppercase;
}
</style>
<?php } elseif ($typo == "f_open") { ?>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:800" rel="stylesheet">
<style>
/*
So Open
*/
h1,
h3,
h5,
body,
button,
input,
select,
textarea {
	font-family: 'Open Sans', sans-serif;
	text-transform: none;
}
h2,
h4,
h6 {
	font-family: 'Open Sans', sans-serif;
	text-transform: uppercase;
}
</style>
<?php } elseif ($typo == "f_domo") { ?>
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<style>

/*
Domo
*/
h1,
h3,
h5,
h2,
h4,
h6,
body,
button,
input,
select,
textarea {
	font-family: 'Roboto Condensed', sans-serif;
	text-transform: none;
}

</style>
<?php } else { ?>
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<style>
/*
Open Default
*/
h1,
h3,
h5,
body,
button,
input,
select,
textarea {
	font-family: 'Open Sans', sans-serif;
	text-transform: none;
}
h2,
h4,
h6 {
	font-family: 'Open Sans', sans-serif;
	text-transform: uppercase;
}
</style>
<?php } ?>



<style>


<?php if ($main_nav_left_or_right == true  ) { ?>
.main-navigation li {
	float: right !important;
	position: relative;
}
<?php } else { ?>
.main-navigation li {
	float: left;
	position: relative;
}
<?php } ?>


/*
Sidebar and Comment area options
*/
<?php if ($sb_style == 'sb_shadow'  ) { ?>
.widget {
    padding: 12px;
    box-shadow: #333 0 0 4px 0;
}
#comments {
    padding: 20px;
    box-shadow: #333 0 0 4px 0;
}
<?php } elseif ($sb_style == 'sb_gray'  ) { ?>
.widget {
    padding: 12px;
    background: #efefef;
}
#comments {
    padding: 20px;
    background: #efefef;
}
<?php } elseif ($sb_style == 'sb_border'  ) { ?>
.widget {
    padding: 12px;
    border: 2px solid #333;
}
#comments {
    padding: 20px;
    border: 2px solid #333;
}
<?php } ?>


</style>

<?php if( $head_code ) : ?>
<!-- Head code from theme options -->
<?php echo $head_code ; ?> 
<!-- END Head code from theme options -->
<?php endif; ?>