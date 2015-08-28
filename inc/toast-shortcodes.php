<?php
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

function toast_button($atts, $content = null) {
    extract( shortcode_atts( array(
        'url' => '#',
        'color' => ''
    ), $atts ) );
    return '<a href="'.$url.'" class="btn '.$color.'"><span>' . do_shortcode($content) . '</span></a>';
}


/* ----------------------------------------------------- */
/* Pre Process Shortcodes */
/* ----------------------------------------------------- */

function pre_process_shortcode($content) {
    global $shortcode_tags;
    // Backup current registered shortcodes and clear them all out
    $orig_shortcode_tags = $shortcode_tags;
    remove_all_shortcodes();

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
    add_shortcode('tst_button', 'toast_button');

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
   array_push($buttons, "tst_btn");  
   return $buttons;  
}

function add_plugin($plugin_array) {  
   $plugin_array['one_half'] =      get_template_directory_uri().'/inc/tinymce/tinymce.js';
   $plugin_array['one_third'] =     get_template_directory_uri().'/inc/tinymce/tinymce.js';
   $plugin_array['two_third'] =     get_template_directory_uri().'/inc/tinymce/tinymce.js';
   $plugin_array['one_fourth'] =    get_template_directory_uri().'/inc/tinymce/tinymce.js';
   $plugin_array['three_fourth'] =  get_template_directory_uri().'/inc/tinymce/tinymce.js';
   $plugin_array['one_fifth'] =     get_template_directory_uri().'/inc/tinymce/tinymce.js';
   $plugin_array['tst_btn'] =       get_template_directory_uri().'/inc/tinymce/tinymce.js';

   return $plugin_array;  
}  