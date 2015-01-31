<?php
/* ==========================================================================
Twitter share shortcode [twitter]
========================================================================== */
function toast_twitter($atts, $content=null){
	$post_url = get_permalink($post->ID);
	$post_title = get_the_title($post->ID);
	$tweet = '<a href="http://twitter.com/home/?status=Lees ' . $post_title . ' op ' . $post_url . '" target="_blank">Deel op Twitter</a>';

	return $tweet;
}

/*-----------------------------------------------------------------------------------*/
/*  HR Dividers
/*-----------------------------------------------------------------------------------*/
function toast_hr( $atts, $content = null) {

  extract( shortcode_atts( array(
    'style' => '1',
    'margin' => ''
    ), $atts ) 
  );
        
  if($margin == '') {
    $return = "";
  } else{
    $return = "style='margin:".$margin." !important;'";
  }
    
  return '<div class="hr hr' .$style. '" ' .$return. '></div>';  
}

/*-----------------------------------------------------------------------------------*/
/*  Section
/*-----------------------------------------------------------------------------------*/
function toast_section( $atts, $content = null) {

extract( shortcode_atts( array(
  'bgcolor'   => '#ffffff',
  'bgimage'   => '',
  'parallax'  => 'false',
  'padding' => '',
  'border' => 'none'
  ), $atts ) );

  if($parallax == 'false') {
      $var1 = '';
  }
  else{
      $var1 = 'section-parallax';
  }

  $var2 = '';

  if($bgimage != ''){
    $var2 = 'background-image: url(' . $bgimage . ');';
  }
      
    return '<div class="section ' . $var1 . '" style="background-color: ' . $bgcolor . '; border: ' . $border . '; padding: ' . $padding . '; ' . $var2 . '"><div class="container clearfix"><div class="sixteen columns">' . do_shortcode($content) . '</div></div></div>';
}

/* ----------------------------------------------------- */
/* Pre Process Shortcodes */
/* ----------------------------------------------------- */

function pre_process_shortcode($content) {
    global $shortcode_tags;
    // Backup current registered shortcodes and clear them all out
    $orig_shortcode_tags = $shortcode_tags;
    remove_all_shortcodes();

    add_shortcode('hr', 'toast_hr');
    add_shortcode('twitter', 'toast_twitter');
    add_shortcode('section', 'toast_section');

    // Do the shortcode (only the one above is registered)
    $content = do_shortcode($content);
 
    // Put the original shortcodes back
    $shortcode_tags = $orig_shortcode_tags;
 
    return $content;
}

add_filter('the_content', 'pre_process_shortcode', 7);

// Allow Shortcodes in Widgets
add_filter('widget_text', 'pre_process_shortcode', 7);

/*-----------------------------------------------------------------------------------*/
/* Add TinyMCE Buttons to Editor */
/*-----------------------------------------------------------------------------------*/
add_action('init', 'add_button');

function add_button() {  
   if ( current_user_can('edit_posts') &&  current_user_can('edit_pages') )  
   {  
     add_filter('mce_external_plugins', 'add_plugin');  
     add_filter('mce_buttons_3', 'register_button_3');
     add_filter('mce_buttons_4', 'register_button_4');  
   }  
} 

// Define Position of TinyMCE Icons
function register_button_3($buttons) {  
   array_push($buttons, "twitter", "section");  
   return $buttons;  
} 
function register_button_4($buttons) {  
   array_push($buttons, "divider");  
   return $buttons;  
}

function add_plugin($plugin_array) {  
   $plugin_array['twitter'] = get_template_directory_uri().'/inc/tinymce/tinymce.js';
   $plugin_array['divider'] = get_template_directory_uri().'/inc/tinymce/tinymce.js';
   $plugin_array['section'] = get_template_directory_uri().'/inc/tinymce/tinymce.js';

   return $plugin_array;  
}  