![Travis CI Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)


/* ==========================================================================
Sidebar Generator usage (https://wordpress.org/plugins/smk-sidebar-generator/)
========================================================================== */
Get all sidebars in an array: Add this function in your theme functions.php:

if(! function_exists('smk_get_all_sidebars') ) {
    function smk_get_all_sidebars(){
        global $wp_registered_sidebars;
        $all_sidebars = array();
        if ( $wp_registered_sidebars && ! is_wp_error( $wp_registered_sidebars ) ) {
            
            foreach ( $wp_registered_sidebars as $sidebar ) {
                $all_sidebars[ $sidebar['id'] ] = $sidebar['name'];
            }
            
        }
        return $all_sidebars;
    }
}

Now using this function you can get all sidebars in an array([id] => [name]):

print_r( smk_get_all_sidebars() )

result of the above code(example)

array(
  "sidebarID" => "Default Sidebar",
  "anotherID" => "Sidebar Name",
  "smk_sbg_18" => "Sidebar Name 1",
  "smk_sbg_7" => "Sidebar Name Something"
)options frame