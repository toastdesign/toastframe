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

/*-----------------------------------------------------------------------------------*/
/*  Columns
/*-----------------------------------------------------------------------------------*/
function toast_one_third( $atts, $content = null ) {
   return '<div class="one_third">' . do_shortcode($content) . '</div>';
}

function toast_one_third_last( $atts, $content = null ) {
   return '<div class="one_third last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function toast_two_third( $atts, $content = null ) {
   return '<div class="two_third">' . do_shortcode($content) . '</div>';
}

function toast_two_third_last( $atts, $content = null ) {
   return '<div class="two_third last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function toast_one_half( $atts, $content = null ) {
   return '<div class="one_half">' . do_shortcode($content) . '</div>';
}

function toast_one_half_last( $atts, $content = null ) {
   return '<div class="one_half last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function toast_one_fourth( $atts, $content = null ) {
   return '<div class="one_fourth">' . do_shortcode($content) . '</div>';
}

function toast_one_fourth_last( $atts, $content = null ) {
   return '<div class="one_fourth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function toast_three_fourth( $atts, $content = null ) {
   return '<div class="three_fourth">' . do_shortcode($content) . '</div>';
}

function toast_three_fourth_last( $atts, $content = null ) {
   return '<div class="three_fourth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function toast_one_fifth( $atts, $content = null ) {
   return '<div class="one_fifth">' . do_shortcode($content) . '</div>';
}

function toast_one_fifth_last( $atts, $content = null ) {
   return '<div class="one_fifth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function toast_two_fifth( $atts, $content = null ) {
   return '<div class="two_fifth">' . do_shortcode($content) . '</div>';
}

function toast_two_fifth_last( $atts, $content = null ) {
   return '<div class="two_fifth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function toast_three_fifth( $atts, $content = null ) {
   return '<div class="three_fifth">' . do_shortcode($content) . '</div>';
}

function toast_three_fifth_last( $atts, $content = null ) {
   return '<div class="three_fifth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function toast_four_fifth( $atts, $content = null ) {
   return '<div class="four_fifth">' . do_shortcode($content) . '</div>';
}

function toast_four_fifth_last( $atts, $content = null ) {
   return '<div class="four_fifth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function toast_one_sixth( $atts, $content = null ) {
   return '<div class="one_sixth">' . do_shortcode($content) . '</div>';
}

function toast_one_sixth_last( $atts, $content = null ) {
   return '<div class="one_sixth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
}

function toast_five_sixth( $atts, $content = null ) {
   return '<div class="five_sixth">' . do_shortcode($content) . '</div>';
}

function toast_five_sixth_last( $atts, $content = null ) {
   return '<div class="five_sixth last">' . do_shortcode($content) . '</div><div class="clear"></div>';
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

    add_shortcode('one_third', 'toast_one_third');
    add_shortcode('one_third_last', 'toast_one_third_last');
    add_shortcode('two_third', 'toast_two_third');
    add_shortcode('two_third_last', 'toast_two_third_last');
    add_shortcode('one_half', 'toast_one_half');
    add_shortcode('one_half_last', 'toast_one_half_last');
    add_shortcode('one_fourth', 'toast_one_fourth');
    add_shortcode('one_fourth_last', 'toast_one_fourth_last');
    add_shortcode('three_fourth', 'toast_three_fourth');
    add_shortcode('three_fourth_last', 'toast_three_fourth_last');
    add_shortcode('one_fifth', 'toast_one_fifth');
    add_shortcode('one_fifth_last', 'toast_one_fifth_last');
    add_shortcode('two_fifth', 'toast_two_fifth');
    add_shortcode('two_fifth_last', 'toast_two_fifth_last');
    add_shortcode('three_fifth', 'toast_three_fifth');
    add_shortcode('three_fifth_last', 'toast_three_fifth_last');
    add_shortcode('four_fifth', 'toast_four_fifth');
    add_shortcode('four_fifth_last', 'toast_four_fifth_last');
    add_shortcode('one_sixth', 'toast_one_sixth');
    add_shortcode('one_sixth_last', 'toast_one_sixth_last');
    add_shortcode('five_sixth', 'toast_five_sixth');
    add_shortcode('five_sixth_last', 'toast_five_sixth_last');

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
   }  
} 

// Define Position of TinyMCE Icons
function register_button_3($buttons) {  
   array_push($buttons, "twitter", "section", "divider", "one_half", "one_third", "two_third", "one_fourth", "three_fourth", "one_fifth");  
   return $buttons;  
}

function add_plugin($plugin_array) {  
   $plugin_array['twitter'] = get_template_directory_uri().'/inc/tinymce/tinymce.js';
   $plugin_array['divider'] = get_template_directory_uri().'/inc/tinymce/tinymce.js';
   $plugin_array['section'] = get_template_directory_uri().'/inc/tinymce/tinymce.js';
   $plugin_array['one_half'] = get_template_directory_uri().'/inc/tinymce/tinymce.js';
   $plugin_array['one_third'] = get_template_directory_uri().'/inc/tinymce/tinymce.js';
   $plugin_array['two_third'] = get_template_directory_uri().'/inc/tinymce/tinymce.js';
   $plugin_array['one_fourth'] = get_template_directory_uri().'/inc/tinymce/tinymce.js';
   $plugin_array['three_fourth'] = get_template_directory_uri().'/inc/tinymce/tinymce.js';
   $plugin_array['one_fifth'] = get_template_directory_uri().'/inc/tinymce/tinymce.js';

   return $plugin_array;  
}  