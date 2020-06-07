<?php
/**
 * Get the bootstrap!
 * (Update path to use cmb2 or CMB2, depending on the name of the folder.
 * Case-sensitive is important on some systems.)
 */
require_once __DIR__ . '/cmb2/init.php';

function custom_fields(){
    // Package Metabox
    $package_metabox = new_cmb2_box( array(
		'id'            => 'package',
		'title'         => __( 'Package Metabox', 'Taxa' ),
		'object_types'  => 'package', // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true
	));
        // Package fields
        $package_metabox->add_field( array(
            'name'       => __( 'Package Location', 'Taxa' ),
            'desc'       => __( 'Enter Package Location (ex: Stockholmes)', 'Taxa' ),
            'default'    => 'Stockholmes',
            'id'         => 'package_location',
            'type'       => 'text',
            'show_on_cb' => 'cmb2_hide_if_no_cats'
        )); // Finish Package Location

        $package_metabox->add_field( array(
            'name'       => __( 'Package Duration', 'Taxa' ),
            'desc'       => __( 'Enter Package Duration (ex: 5 Days 6 Nights)', 'Taxa' ),
            'default'    => '5 Days 6 Nights',
            'id'         => 'package_duration',
            'type'       => 'text',
            'show_on_cb' => 'cmb2_hide_if_no_cats'
        )); // Finish Package Duration
    // Finish Package

    // Popular Place Metabox
    $popular_place_metabox = new_cmb2_box( array(
		'id'            => 'popular_place',
		'title'         => __( 'Popular Place Metabox', 'Taxa' ),
		'object_types'  => 'popular-place', // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true
	));
        // Popular Place fields
        $popular_place_metabox->add_field( array(
            'name'       => __( 'Popular Place Feature', 'Taxa' ),
            'desc'       => __( 'Enter Popular Place Feature (ex: Proper Guided Tour)', 'Taxa' ),
            'default'    => 'Proper Guided Tour',
            'id'         => 'popular_place_feature',
            'type'       => 'text',
            'show_on_cb' => 'cmb2_hide_if_no_cats'
        )); // Finish Popular Place Feature
    // Finish Popular Place

    // Team Member Metabox
    $team_member_metabox = new_cmb2_box( array(
		'id'            => 'team_member',
		'title'         => __( 'Team Member Metabox', 'Taxa' ),
		'object_types'  => 'team-member', // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true
	));
        // Team Member fields
        $team_member_metabox->add_field( array(
            'name'       => __( 'Team Member Role', 'Taxa' ),
            'desc'       => __( 'Enter Team Member Role (ex: Senior Barrister at law)', 'Taxa' ),
            'default'    => 'Senior Barrister at law',
            'id'         => 'team_member_role',
            'type'       => 'text',
            'show_on_cb' => 'cmb2_hide_if_no_cats'
        )); // Finish Team Member Role
    // Finish Team Member

    // Testimonial Metabox
    $testimonial_metabox = new_cmb2_box( array(
		'id'            => 'testimonial',
		'title'         => __( 'Testimonial Metabox', 'Taxa' ),
		'object_types'  => 'testimonial', // Post type
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true
	));
        // Testimonial fields
        $testimonial_metabox->add_field( array(
            'name'       => __( 'Testimonial Star', 'Taxa' ),
            'desc'       => __( 'Select Testimonial Star Number that given by your Testimonial Provider', 'Taxa' ),
            'default'    => 'Five',
            'id'         => 'testimonial_star',
            'type'       => 'select',
            'show_on_cb' => 'cmb2_hide_if_no_cats',
            'options'          => array(
                'One' => __( '1', 'Taxa' ),
                'Two'   => __( '2', 'Taxa' ),
                'Three'     => __( '3', 'Taxa' ),
                'Four'     => __( '4', 'Taxa' ),
                'Five'     => __( '5', 'Taxa' ),
            )
        )); // Finish Testimonial Star
    // Finish Testimonial

    // Category Metabox
    $category_metabox = new_cmb2_box( array(
		'id'            => 'category',
		'title'         => __( 'Category Metabox', 'Taxa' ),
        'object_types'  => 'term', // Post type
        'taxonomies'    => array( 'category', 'post_tag' ),
		'context'       => 'normal',
		'priority'      => 'high',
		'show_names'    => true
	));
        // Category fields
        $category_metabox->add_field( array(
            'name'       => __( 'Category Image', 'Taxa' ),
            'desc'       => __( 'Upload Category Image', 'Taxa' ),
            'id'         => 'category_img',
            'type'       => 'file',
            'show_on_cb' => 'cmb2_hide_if_no_cats',
            'options' => array(
                'url' => false, // Hide the text input for the url
            ),
            'text'    => array(
                'add_upload_file_text' => 'Category Featured Image' // Change upload button text. Default: "Add or Upload File"
            )
        )); // Finish Category Image
    // Finish Category
}
add_action('cmb2_admin_init', 'custom_fields');