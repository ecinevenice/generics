<?php



// Exit if accessed directly

if ( !defined('ABSPATH')) exit;

/** * Home Page * * Note: You can overwrite home.php as well as any other Template in Child Theme. * Create the same file (name) include in /responsive-child-theme/ and you're all set to go! * @see            http://codex.wordpress.org/Child_Themes

 *

 * @file           home.php

 * @package        Responsive 

 * @author         Emil Uzelac 

 * @copyright      2003 - 2012 ThemeID

 * @license        license.txt

 * @version        Release: 1.0

 * @filesource     wp-content/themes/responsive/home.php

 * @link           http://codex.wordpress.org/Template_Hierarchy

 * @since          available since Release 1.0

 */

?>

<?php get_header(); ?>
<!-- modal content -->		<div id="basic-modal-content">			<h3>St Francis Generic Drug</h3>			<p>	4th Floor St. Francis Square Mall<br/>				Julia Vargas Ave cor. Bank Drive,<br/>				Ortigas Center, Mandaluyong City, Philippines<br/>				Zip Code : 1550			</p>			<img src="<?php echo get_template_directory_uri(); ?>/images/location_map.jpg" style="width:900px; height:500px;"style="width:900px; height:500px;" />		</div>		<div style='display:none'>			<img src='img/basic/x.png' alt='' />		</div>		
<!--banner and contact us---->    
<div class="grid2 col-940"> 

    <div id = "upper_sidebar" class="grid2 col-210 fit">  
    <?php responsive_widgets(); // above widgets hook ?>            
            <?php if (!dynamic_sidebar('left-sidebar')) : ?>
            <div class="widget-wrapper">            
                <div class="widget-title"><?php _e('In Archive', 'responsive'); ?></div>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
            </div><!-- end of .widget-wrapper -->
           <?php endif; //end of right-left ?>
     <?php responsive_widgets_end(); // after widgets hook ?>	</div>

    <div id ="divider" class="grid3 col-680  fit">  			
	<div id="slider">		<?php echo do_shortcode('[cycloneslider id="banner"]'); ?>
		<?php //if ( function_exists( 'soliloquy_slider' ) ) soliloquy_slider( '31' );?>
        </div>
     </div>
</div>

<!--NEWS AND EVENTS-->
<?php get_sidebar('home'); ?>


<?php get_footer(); ?>