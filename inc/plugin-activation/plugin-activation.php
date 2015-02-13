<?php
 
/**
 * Since I'm already doing a tutorial, I'm not going to include comments to
 * this code, but if you want, you can check out the "example.php" file
 * inside the ZIP you downloaded - it has a very detailed documentation.
 */
 
require_once get_template_directory() . '/inc/plugin-activation/class-tgm-plugin-activation.php';
 
add_action( 'tgmpa_register', 'mytheme_require_plugins' );
 
function mytheme_require_plugins() {
 
    $plugins = array(
    	// This is an example of how to include a plugin pre-packaged with a theme.
        array(

        ),
 
        // Metabox from wordpress
        array(
            'name'      => 'Meta box',
            'slug'      => 'meta-box',
            'required'  => false,
        ),
        // Contact form 7 from wordpress
        array(
            'name'      => 'Contact form 7',
            'slug'      => 'contact-form-7',
            'required'  => false,
        ),
    );
    $config = array( 
    	'default_path' => '',                      // Default absolute path to pre-packaged plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => false,                   // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => true,                    // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.
        'strings'      => array(
            'page_title'                      => __( 'Instaleer vereiste plugins', 'toastframe' ),
            'menu_title'                      => __( 'Instaleer plugins', 'toastframe' ),
            'installing'                      => __( '%s,: aan het instaleren', 'toastframe' ), // %s = plugin name.
            'oops'                            => __( 'Er ging iets fout met de plugin instalatie', 'toastframe' ),
            'notice_can_install_required'     => _n_noop( 'Dit thema heeft de volgende plugin nodig voor gebruik: %1$s.', 'Dit thema heeft de volgende plugins nodig voor gebruik: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_install_recommended'  => _n_noop( 'Dit thema beveelt de volgende plugin aan voor optimaal gebruik: %1$s.', 'Dit thema beveelt de volgende plugins aan voor optimaal gebruik: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s).
            'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
            'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s).
            'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s).
            'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s).
            'install_link'                    => _n_noop( 'Start het instaleren van de plugin', 'Start het instaleren van de plugins' ),
            'activate_link'                   => _n_noop( 'Start het activeren van de plugin', 'Start het activeren van de plugins' ),
            'return'                          => __( 'Return to Required Plugins Installer', 'toastframe' ),
            'plugin_activated'                => __( 'Plugin activated successfully.', 'toastframe' ),
            'complete'                        => __( 'All plugins installed and activated successfully. %s', 'toastframe' ), // %s = dashboard link.
            'nag_type'                        => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
        )
    );
 
    tgmpa( $plugins, $config );
 
}
 
?>