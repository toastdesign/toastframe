<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'toastframe';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'theme-textdomain'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	$options = array();

	$options[] = array(
		'name' => __( 'Basis Instellingen' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Contact gegevens' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Bedrijfnaam' ),
		'id' => 'contact_company_name',
		'std' => '',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Email voor contact' ),
		'id' => 'contact_email',
		'std' => '',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Telefoonnummer voor contact' ),
		'id' => 'contact_phone',
		'std' => '',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Straat' ),
		'id' => 'contact_street',
		'std' => '',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Huisnummer' ),
		'id' => 'contact_number',
		'std' => '',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Postcode' ),
		'id' => 'contact_zipcode',
		'std' => '',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Plaats' ),
		'id' => 'contact_city',
		'std' => '',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Social Media Links' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Facebook' ),
		'id' => 'social_facebook',
		'std' => '',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Twitter' ),
		'id' => 'social_twitter',
		'std' => '',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Pinterest' ),
		'id' => 'social_pinterest',
		'std' => '',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Linkedin' ),
		'id' => 'social_linkedin',
		'std' => '',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Instagram' ),
		'id' => 'social_instagram',
		'std' => '',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Google Analytics' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Google Analytics Code' ),
		'id' => 'googlecode',
		'std' => '',
		'type' => 'textarea'
	);

	return $options;
}