<?php



// Exit if accessed directly

if ( !defined('ABSPATH')) exit;



/**

 * Header Template

 *

 *

 * @file           header.php

 * @package        Responsive 

 * @author         Emil Uzelac 

 * @copyright      2003 - 2012 ThemeID

 * @license        license.txt

 * @version        Release: 1.3

 * @filesource     wp-content/themes/responsive/header.php

 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29

 * @since          available since Release 1.0

 */

?>

<!doctype html>

<!--[if !IE]>      <html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->

<!--[if IE 7 ]>    <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->

<!--[if IE 8 ]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->

<!--[if IE 9 ]>    <html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->

<!--[if gt IE 9]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

<head>



<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

<title><?php wp_title('&#124;', true, 'right'); ?><?php bloginfo('name'); ?></title>
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<link href='http://fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>

<!-- basic modal stylesheet-->
<!--<link type='text/css' href='<?php //echo get_stylesheet_directory_uri()?>/basic/css/demo.css' rel='stylesheet' media='screen' />-->
<link type='text/css' href='<?php echo get_stylesheet_directory_uri()?>/basic/css/basic.css' rel='stylesheet' media='screen' />

<!--google analytics-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38677141-1']);
  _gaq.push(['_setDomainName', 'stfrancisgenerics.net']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!--end of google analytics-->

<!--modal section javascript-->
<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri()?>/basic/js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='<?php echo get_stylesheet_directory_uri()?>/basic/js/basic.js'></script>

<!---searching in medicines--->
<script>
function getValue()
  {
/*document.getElementById('table_medicine').style.background = '#FFF';*/
//document.getElementById(document.getElementById('txtsearch').value.toUpperCase()).style.background = '#C3FDB8';
if(document.getElementById('txtsearch').value =='')
	window.location="http://www.stfrancisgenerics.net/?page_id=114#what_we_carry";
else if(document.getElementById(document.getElementById('txtsearch').value.toUpperCase()) == null)
	alert('No items match your search.');
else
  window.location="http://www.stfrancisgenerics.net/?page_id=114#"+document.getElementById("txtsearch").value.toUpperCase();
   
  }
</script>
<!--- end of search script-->


 <?php if(is_home()){ ?> 
	<script type="text/javascript">
			//$(document).ready(function() {('#basic-modal-content').modal();});
	</script>
 <?php }?>

<!-- End basic MODAL HEAD section -->

<?php wp_enqueue_style('responsive-style', get_stylesheet_uri(), false, '1.7.9');?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

		

<?php responsive_container(); // before container hook ?>

         
<div id="container" class="hfeed">


    <?php responsive_header(); // before header hook ?>

    <div id="header">

       <?php if (has_nav_menu('top-menu', 'responsive')) { ?>

	        <?php wp_nav_menu(array(

				    'container'       => '',

					'fallback_cb'	  =>  false,

					'menu_class'      => 'top-menu',

					'theme_location'  => 'top-menu')

					); 

				?>

        <?php } ?>

        

    <?php responsive_in_header(); // header hook ?>

   

	<?php if ( get_header_image() != '' ) : ?>

               

        <div id="logo">

            <a href="<?php echo home_url('/'); ?>"><img src="<?php header_image(); ?>" width="<?php if(function_exists('get_custom_header')) { echo get_custom_header() -> width;} else { echo HEADER_IMAGE_WIDTH;} ?>" height="<?php if(function_exists('get_custom_header')) { echo get_custom_header() -> height;} else { echo HEADER_IMAGE_HEIGHT;} ?>" alt="<?php bloginfo('name'); ?>" /></a>

        </div><!-- end of #logo -->

        

    <?php endif; // header image was removed ?>







    <?php if ( !get_header_image() ) : ?>



        <div id="logo">

            <span class="site-name"><a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php //bloginfo('name'); ?></a></span>

            <span class="site-description"><?php //bloginfo('description'); ?></span>

     

	</div><!-- end of #logo -->  



    <?php endif; // header image was removed (again) ?>

    

  <?php get_sidebar('top'); ?>
<br/>
		     <div id ="menu2" class="grid2 col-940 fit">
	    
    <div id = "upper_sidebar" class="grid2 col-210 fit">  
</div><div id ="divider3" class="grid3 col-680  fit">
				<?php wp_nav_menu(array(

				    'container'       => '',

					'theme_location'  => 'header-menu')

					); 

				?>
				
</div>
             </div>   

            <?php if (has_nav_menu('sub-header-menu', 'responsive')) { ?>

	            <?php wp_nav_menu(array(

				    'container'       => '',

					'menu_class'      => 'sub-header-menu',

					'theme_location'  => 'sub-header-menu')

					); 

				?>

            <?php } ?>

    </div><!-- end of #header -->

    <?php responsive_header_end(); // after header hook ?>

                 


<!------------------------------------------------------------>

    <div id="wrapper" class="clearfix">

    <?php responsive_in_wrapper(); // wrapper hook ?>



<!------------------------------------------------------------>


        <div id="undermenu" class="grid2 col-940 fit">


	


       



<!------------------------------------------------------------->


