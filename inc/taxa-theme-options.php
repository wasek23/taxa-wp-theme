<?php

    /**
     * ReduxFramework Barebones Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }

    // This is your option name where all the Redux data is stored.
    $opt_name = "taxa";

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Customize', 'Taxa' ),
        'page_title'           => __( 'Customize', 'Taxa' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => true,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => true,
        // Show the time the page took to load, etc
        'update_notice'        => true,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '_options',
        // Page slug used to denote the panel
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        //'compiler'             => true,

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'light',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'effect'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $args['admin_bar_links'][] = array(
        'id'    => 'redux-docs',
        'href'  => 'http://docs.reduxframework.com/',
        'title' => __( 'Documentation', 'Taxa' ),
    );

    $args['admin_bar_links'][] = array(
        //'id'    => 'redux-support',
        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',
        'title' => __( 'Support', 'Taxa' ),
    );

    $args['admin_bar_links'][] = array(
        'id'    => 'redux-extensions',
        'href'  => 'reduxframework.com/extensions',
        'title' => __( 'Extensions', 'Taxa' ),
    );

    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $args['share_icons'][] = array(
        'url'   => 'https://github.com/ReduxFramework/ReduxFramework',
        'title' => 'Visit us on GitHub',
        'icon'  => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $args['share_icons'][] = array(
        'url'   => 'https://www.facebook.com/pages/Redux-Framework/243141545850368',
        'title' => 'Like us on Facebook',
        'icon'  => 'el el-facebook'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://twitter.com/reduxframework',
        'title' => 'Follow us on Twitter',
        'icon'  => 'el el-twitter'
    );
    $args['share_icons'][] = array(
        'url'   => 'http://www.linkedin.com/company/redux-framework',
        'title' => 'Find us on LinkedIn',
        'icon'  => 'el el-linkedin'
    );

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '<p>Did you know that Redux sets a global variable for you? To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'Taxa' ), $v );
    } else {
        $args['intro_text'] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'Taxa' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '<p>This text is displayed below the options panel. It isn\'t required, but more info is always better! The footer_text field accepts all HTML.</p>', 'Taxa' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */

    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'Taxa' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'Taxa' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'Taxa' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'Taxa' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'Taxa' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // START Fields

    // Header Footer
    Redux::setSection( $opt_name, array(
        'title' => __( 'Header Footer', 'Taxa' ),
        'id'    => 'header_footer',
        'desc'  => __( 'Header Footer Customize', 'Taxa' ),
        'icon'  => 'el el-opensource'
    ));

        // Header
        Redux::setSection( $opt_name, array(
            'title'         => __('Header', 'Taxa'),
            'desc'          => __('Customize Header Area', 'Taxa'),
            'id'            => 'header',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'web_favicon',
                    'type'      => 'media',
                    'title'     => __('Favicon', 'Taxa'),
                    'desc'      => __('Upload Your Website Favicon', 'Taxa'),
                    'url'       => true,
                    'default'   => array(
                        'url'   => get_template_directory_uri().'/img/favicon.png'
                    )
                ), // Finish Favicon

                array(
                    'id'        => 'header_logo',
                    'type'      => 'media',
                    'title'     => __('Logo', 'Taxa'),
                    'desc'      => __('Upload Your Website Logo', 'Taxa'),
                    'url'       => true,
                    'default'   => array(
                        'url'   => get_template_directory_uri().'/img/logo.png'
                    )
                ), // Finish Logo

                array(
                    'id'        => 'menu_btn_label',
                    'type'      => 'text',
                    'title'     => __('Menu Action Button Label', 'Taxa'),
                    'desc'      => __('Enter Menu Action Button Label', 'Taxa'),
                    'default'   => 'Book a trip'
                ), // Finish Menu Action Button Label

                array(
                    'id'        => 'menu_btn_url',
                    'type'      => 'text',
                    'title'     => __('Menu Action Button url', 'Taxa'),
                    'desc'      => __('Enter Menu Action Button url', 'Taxa'),
                    'default'   => esc_url(site_url('/book-trip'))
                ) // Finish Menu Action Button url
            ) // Finish Header Fields
        )); // Finish Header

        // Footer
        Redux::setSection( $opt_name, array(
            'title'         => __('Footer', 'Taxa'),
            'desc'          => __('Customize Footer Area', 'Taxa'),
            'id'            => 'footer',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'footer_copyright',
                    'type'      => 'editor',
                    'title'     => __('Footer Copyright', 'Taxa'),
                    'desc'      => __('Enter Footer Copyright', 'Taxa'),
                    'default'   => 'Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>. Wordpress Theme by <a href="https://wasekbellah.com" target="_blank">Wasek Bellah</a>'
                ), // Finish Menu Action Button url

                array(
                    'id'        => 'footer_social_links',
                    'type'      => 'slides',
                    'title'     => __('Footer Social Links', 'Taxa'),
                    'desc'      => __('Enter Footer Social Links', 'Taxa'),
                    'placeholder' => array(
                        'title'     => 'Enter Social Name (ex: facebook), Must Use Lowercase',
                        'description' => 'No Need to Enter Anything',
                        'url'       => 'Enter Social Link'
                    ) 
                ), // Finish Footer Social Links
            ) // Finish Header Fields
        )); // Finish Header


    // Theme Sections
    Redux::setSection( $opt_name, array(
        'title' => __( 'Theme Sections', 'Taxa' ),
        'id'    => 'theme_sections',
        'desc'  => __( 'Theme Sections Customize', 'Taxa' ),
        'icon'  => 'el el-file'
    ));
    
        // Feature Section
        Redux::setSection( $opt_name, array(
            'title'         => __('Feature Section', 'Taxa'),
            'desc'          => __('Customize Feature Section', 'Taxa'),
            'id'            => 'feature_section',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'feature_section_title',
                    'type'      => 'text',
                    'title'     => __('Feature Section Title', 'Taxa'),
                    'desc'      => __('Enter Feature Section Title', 'Taxa'),
                    'default'   => 'Getting Adventure with Services'
                ), // Finish Feature Section Title

                array(
                    'id'        => 'feature_section_description',
                    'type'      => 'textarea',
                    'title'     => __('Feature Section Description', 'Taxa'),
                    'desc'      => __('Enter Feature Section Description', 'Taxa'),
                    'default'   => 'We’re Offering these Popular Services'
                ), // Finish Feature Section Description

                array(
                    'id'        => 'feature_post_continue_read_btn_label',
                    'type'      => 'text',
                    'title'     => __('Feature Post Continue Reading Button Label', 'Taxa'),
                    'desc'      => __('Enter Feature Post Continue Reading Button Label', 'Taxa'),
                    'default'   => 'Read More'
                ) // Finish Feature Post Continue Reading Button Label
            ) // Finish Feature Section Fields
        )); // Finish Feature Section

        // Package Section
        Redux::setSection( $opt_name, array(
            'title'         => __('Package Section', 'Taxa'),
            'desc'          => __('Customize Package Section', 'Taxa'),
            'id'            => 'package_section',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'package_section_title',
                    'type'      => 'text',
                    'title'     => __('Package Section Title', 'Taxa'),
                    'desc'      => __('Enter Package Section Title', 'Taxa'),
                    'default'   => 'Famous Trips Packages'
                ), // Finish Package Section Title

                array(
                    'id'        => 'package_section_description',
                    'type'      => 'textarea',
                    'title'     => __('Package Section Description', 'Taxa'),
                    'desc'      => __('Enter Package Section Description', 'Taxa'),
                    'default'   => 'We’re Offering these Trip Packages'
                ), // Finish Package Section Description

                array(
                    'id'        => 'package_post_continue_read_btn_label',
                    'type'      => 'text',
                    'title'     => __('Package Post Continue Reading Button Label', 'Taxa'),
                    'desc'      => __('Enter Package Post Continue Reading Button Label', 'Taxa'),
                    'default'   => 'Read More'
                ) // Finish Package Post Continue Reading Button Label
            ) // Finish Package Section Fields
        )); // Finish Package Section

        // Popular Places Section
        Redux::setSection( $opt_name, array(
            'title'         => __('Popular Places Section', 'Taxa'),
            'desc'          => __('Customize Popular Places Section', 'Taxa'),
            'id'            => 'popular_places_section',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'popular_places_section_title',
                    'type'      => 'text',
                    'title'     => __('Popular Places Section Title', 'Taxa'),
                    'desc'      => __('Enter Popular Places Section Title', 'Taxa'),
                    'default'   => 'Popular Places Around the World'
                ), // Finish Popular Places Section Title

                array(
                    'id'        => 'popular_places_section_description',
                    'type'      => 'textarea',
                    'title'     => __('Popular Places Section Description', 'Taxa'),
                    'desc'      => __('Enter Popular Places Section Description', 'Taxa'),
                    'default'   => 'We’re Offering these Trip Packages'
                ) // Finish Popular Places Section Description
            ) // Finish Popular Places Section Fields
        )); // Finish Popular Places Section

        // Team Section
        Redux::setSection( $opt_name, array(
            'title'         => __('Team Section', 'Taxa'),
            'desc'          => __('Customize Team Section', 'Taxa'),
            'id'            => 'team_section',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'team_section_title',
                    'type'      => 'text',
                    'title'     => __('Team Section Title', 'Taxa'),
                    'desc'      => __('Enter Team Section Title', 'Taxa'),
                    'default'   => 'Intelligent Team Members'
                ), // Finish Team Section Title

                array(
                    'id'        => 'team_section_description',
                    'type'      => 'textarea',
                    'title'     => __('Team Section Description', 'Taxa'),
                    'desc'      => __('Enter Team Section Description', 'Taxa'),
                    'default'   => 'We’re Offering these Trip Packages'
                ) // Finish Team Section Description
            ) // Finish Team Section Fields
        )); // Finish Team Section

        // Testimonial Section
        Redux::setSection( $opt_name, array(
            'title'         => __('Testimonial Section', 'Taxa'),
            'desc'          => __('Customize Testimonial Section', 'Taxa'),
            'id'            => 'testimonial_section',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'testimonial_quote_bg_img',
                    'type'      => 'media',
                    'title'     => __('Testimonial Quotation Background Image', 'Taxa'),
                    'desc'      => __('Upload Testimonial Quotation Background Image', 'Taxa'),
                    'url'       => true,
                    'default'   => array(
                        'url'   => get_template_directory_uri().'/img/quote.png'
                    )
                ) // Finish Testimonial Section Title
            ) // Finish Testimonial Section Fields
        )); // Finish Testimonial Section

        // CTA Button Section
        Redux::setSection( $opt_name, array(
            'title'         => __('CTA Button Section', 'Taxa'),
            'desc'          => __('Customize CTA Button Section', 'Taxa'),
            'id'            => 'cta_button_section',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'cta_button_section_bg_img',
                    'type'      => 'media',
                    'title'     => __('CTA Button Section Background Image', 'Taxa'),
                    'desc'      => __('Upload CTA Button Section Background Image', 'Taxa'),
                    'url'       => true,
                    'default'   => array(
                        'url'   => get_template_directory_uri().'/img/cta-bg.png'
                    )
                ), // Finish CTA Button Section Background Image

                array(
                    'id'        => 'cta_button_section_img',
                    'type'      => 'media',
                    'title'     => __('CTA Button Section Image', 'Taxa'),
                    'desc'      => __('Upload CTA Button Section Image', 'Taxa'),
                    'url'       => true,
                    'default'   => array(
                        'url'   => get_template_directory_uri().'/img/cta-img.png'
                    )
                ), // Finish CTA Button Section Image
                
                array(
                    'id'        => 'cta_button_section_title',
                    'type'      => 'text',
                    'title'     => __('CTA Button Section Title', 'Taxa'),
                    'desc'      => __('Enter CTA Button Section Title', 'Taxa'),
                    'default'   => 'Get Ready for Real time Adventure'
                ), // Finish CTA Button Section Title

                array(
                    'id'        => 'cta_button_section_description',
                    'type'      => 'textarea',
                    'title'     => __('CTA Button Section Description', 'Taxa'),
                    'desc'      => __('Enter CTA Button Section Description', 'Taxa'),
                    'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation.'
                ), // Finish CTA Button Section Description

                array(
                    'id'        => 'cta_button_label',
                    'type'      => 'text',
                    'title'     => __('CTA Button Label', 'Taxa'),
                    'desc'      => __('Enter CTA Button Label', 'Taxa'),
                    'default'   => 'Book a Trip'
                ), // Finish CTA Button Label

                array(
                    'id'        => 'cta_button_url',
                    'type'      => 'text',
                    'title'     => __('CTA Button url', 'Taxa'),
                    'desc'      => __('Enter CTA Button url', 'Taxa'),
                    'default'   => esc_url(site_url('/book-trip'))
                ) // Finish CTA Button url
            ) // Finish CTA Button Section Fields
        )); // Finish CTA Button Section

        // CTA Newsletter Section
        Redux::setSection( $opt_name, array(
            'title'         => __('CTA Newsletter Section', 'Taxa'),
            'desc'          => __('Customize CTA Newsletter Section', 'Taxa'),
            'id'            => 'cta_newsletter_section',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'cta_newsletter_section_bg_img',
                    'type'      => 'media',
                    'title'     => __('CTA Newsletter Section Background Image', 'Taxa'),
                    'desc'      => __('Upload CTA Newsletter Section Background Image', 'Taxa'),
                    'url'       => true,
                    'default'   => array(
                        'url'   => get_template_directory_uri().'/img/cta-bg2.png'
                    )
                ), // Finish CTA Newsletter Section Background Image

                array(
                    'id'        => 'cta_newsletter_section_img',
                    'type'      => 'media',
                    'title'     => __('CTA Newsletter Section Image', 'Taxa'),
                    'desc'      => __('Upload CTA Newsletter Section Image', 'Taxa'),
                    'url'       => true,
                    'default'   => array(
                        'url'   => get_template_directory_uri().'/img/cta-img2.png'
                    )
                ), // Finish CTA Newsletter Section Image
                
                array(
                    'id'        => 'cta_newsletter_section_title',
                    'type'      => 'text',
                    'title'     => __('CTA Newsletter Section Title', 'Taxa'),
                    'desc'      => __('Enter CTA Newsletter Section Title', 'Taxa'),
                    'default'   => 'Subscribe <br>for our Newsletter'
                ), // Finish CTA Newsletter Section Title

                array(
                    'id'        => 'cta_newsletter_section_description',
                    'type'      => 'textarea',
                    'title'     => __('CTA Newsletter Section Description', 'Taxa'),
                    'desc'      => __('Enter CTA Newsletter Section Description', 'Taxa'),
                    'default'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
                ), // Finish CTA Newsletter Section Description

                array(
                    'id'        => 'mailchimp_post_url',
                    'type'      => 'text',
                    'title'     => __('CTA Newsletter- Mailchimp Post url', 'Taxa'),
                    'desc'      => __('Enter CTA Newsletter- Mailchimp Post url (ex: https://audience.us12.list-manage.com/subscribe/post?u=8641926880ade1ac87bd9c56a&amp;id=92a4861d01)', 'Taxa'),
                    'default'   => 'https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01'
                ), // Finish CTA Newsletter- Mailchimp Post url

                array(
                    'id'        => 'cta_newsletter_submit_btn_label',
                    'type'      => 'textarea',
                    'title'     => __('CTA Newsletter Submit Button Label', 'Taxa'),
                    'desc'      => __('Enter CTA Newsletter Submit Button Label', 'Taxa'),
                    'default'   => 'Subscribe'
                ) // Finish CTA Newsletter Submit Button Label
            ) // Finish CTA Newsletter Section Fields
        )); // Finish CTA Newsletter Section

        // Map Section
        Redux::setSection( $opt_name, array(
            'title'         => __('Map Section', 'Taxa'),
            'desc'          => __('Customize Map Section', 'Taxa'),
            'id'            => 'map_section',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'google_map_api',
                    'type'      => 'text',
                    'title'     => __('Google Map API Key', 'Taxa'),
                    'desc'      => __('Enter Google Map API Key', 'Taxa'),
                    'default'   => 'AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE'
                ), // Finish Google Map API Key

                array(
                    'id'        => 'map_center',
                    'type'      => 'text',
                    'title'     => __('Map Center Coordinates', 'Taxa'),
                    'desc'      => __('Enter Map Center Coordinates (ex: lat: 23.8103, lng: 90.4125)', 'Taxa'),
                    'default'   => 'lat: 23.8103, lng: 90.4125'
                ), // Finish Map Center Coordinates

                array(
                    'id'        => 'map_zoom',
                    'type'      => 'text',
                    'title'     => __('Map Zoom Level', 'Taxa'),
                    'desc'      => __('Enter Map Zoom Level', 'Taxa'),
                    'default'   => '13'
                ), // Finish Map Zoom Level

                array(
                    'id'        => 'map_marker',
                    'type'      => 'slides',
                    'title'     => __('Map Marker', 'Taxa'),
                    'desc'      => __('Enter Map Marker', 'Taxa'),
                    'placeholder' => array(
                        'title'     => '(Required) Enter Map Marker Coordinates (ex: lat: 23.8103, lng: 90.4125)',
                        'description' => '(Optional) Enter Map Marker Text',
                        'url'       => '(Optional) Enter Map Marker Icon url. Use 32px Icon'
                    ) 
                ), // Finish Map Zoom Level
            ) // Finish Map Section Fields
        )); // Finish Map Section
    
        // Homepage Blog Section
        Redux::setSection( $opt_name, array(
            'title'         => __('Homepage Blog Section', 'Taxa'),
            'desc'          => __('Customize Homepage Blog Section', 'Taxa'),
            'id'            => 'homepage_blog_section',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'homepage_blog_section_title',
                    'type'      => 'text',
                    'title'     => __('Homepage Blog Section Title', 'Taxa'),
                    'desc'      => __('Enter Homepage Blog Section Title', 'Taxa'),
                    'default'   => 'Latest Posts from Blog'
                ), // Finish Homepage Blog Section Title

                array(
                    'id'        => 'homepage_blog_section_description',
                    'type'      => 'textarea',
                    'title'     => __('Homepage Blog Section Description', 'Taxa'),
                    'desc'      => __('Enter Homepage Blog Section Description', 'Taxa'),
                    'default'   => 'We’re Offering these Trip Packages'
                ) // Finish Homepage Blog Section Description
            ) // Finish Homepage Blog Section Fields
        )); // Finish Homepage Blog Section

        // About Feature
        Redux::setSection( $opt_name, array(
            'title'         => __('About Feature Section', 'Taxa'),
            'desc'          => __('Customize About Feature Section', 'Taxa'),
            'id'            => 'about_feature',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'about_feature_title',
                    'type'      => 'text',
                    'title'     => __('About Feature Title', 'Taxa'),
                    'desc'      => __('Enter About Feature Title', 'Taxa'),
                    'default'   => 'We Believe<br>that Interior beauty<br>Lasts Long'
                ), // Finish About Feature Title
                
                array(
                    'id'        => 'about_feature_description',
                    'type'      => 'editor',
                    'title'     => __('About Feature Description', 'Taxa'),
                    'desc'      => __('Enter About Feature Description', 'Taxa'),
                    'default'   => 'inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that as women. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.'
                ), // Finish About Feature Description

                array(
                    'id'        => 'about_feature_bg_img',
                    'type'      => 'media',
                    'title'     => __('About Feature Background Image', 'Taxa'),
                    'desc'      => __('Upload About Feature Background Image', 'Taxa'),
                    'url'       => true,
                    'default'   => array(
                        'url'   => get_template_directory_uri().'/img/about-img.jpg'
                    )
                ) // Finish Logo
            ) // Finish About Feature Fields
        )); // Finish About Feature

    
    // Home Page
    Redux::setSection( $opt_name, array(
        'title' => __( 'Home Page', 'Taxa' ),
        'id'    => 'home_page',
        'desc'  => __( 'Home Page Customize', 'Taxa' ),
        'icon'  => 'el el-home'
    ));

        // Homepage Banner
        Redux::setSection( $opt_name, array(
            'title'         => __('Homepage Banner', 'Taxa'),
            'desc'          => __('Customize Homepage Banner', 'Taxa'),
            'id'            => 'homepage_banner',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'homepage_banner_bg_img',
                    'type'      => 'media',
                    'title'     => __('Homepage Banner Background Image', 'Taxa'),
                    'desc'      => __('Upload Homepage Banner Background Image', 'Taxa'),
                    'url'       => true,
                    'default'   => array(
                        'url'   => get_template_directory_uri().'/img/home-banner.png'
                    )
                ) // Finish Homepage Banner Background Image
            ) // Finish Homepage Banner Fields
        )); // Finish Homepage Banner

        // Homepage Sections
        Redux::setSection( $opt_name, array(
            'title'         => __('Homepage Sections', 'Taxa'),
            'desc'          => __('Customize Homepage Sections', 'Taxa'),
            'id'            => 'homepage_sections',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'homepage_feature_on_off',
                    'type'      => 'switch',
                    'title'     => __('Homepage Feature Section On/Off', 'Taxa'),
                    'desc'      => __('If You went to Show This Section in Homepage, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'Taxa'),
                    'default'   => true
                ), // Finish Homepage Feature Section On/Off

                array(
                    'id'        => 'homepage_cta_button_on_off',
                    'type'      => 'switch',
                    'title'     => __('Homepage CTA Button Section On/Off', 'Taxa'),
                    'desc'      => __('If You went to Show This Section in Homepage, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'Taxa'),
                    'default'   => true
                ), // Finish Homepage CTA Button Section On/Off

                array(
                    'id'        => 'homepage_package_on_off',
                    'type'      => 'switch',
                    'title'     => __('Homepage Package Section On/Off', 'Taxa'),
                    'desc'      => __('If You went to Show This Section in Homepage, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'Taxa'),
                    'default'   => true
                ), // Finish Homepage Package Section On/Off

                array(
                    'id'        => 'homepage_popular_places_on_off',
                    'type'      => 'switch',
                    'title'     => __('Homepage Popular Places Section On/Off', 'Taxa'),
                    'desc'      => __('If You went to Show This Section in Homepage, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'Taxa'),
                    'default'   => true
                ), // Finish Homepage Popular Places Section On/Off

                array(
                    'id'        => 'homepage_team_on_off',
                    'type'      => 'switch',
                    'title'     => __('Homepage Team Section On/Off', 'Taxa'),
                    'desc'      => __('If You went to Show This Section in Homepage, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'Taxa'),
                    'default'   => true
                ), // Finish Homepage Team Section On/Off

                array(
                    'id'        => 'homepage_cta_newsletter_on_off',
                    'type'      => 'switch',
                    'title'     => __('Homepage CTA Newsletter Section On/Off', 'Taxa'),
                    'desc'      => __('If You went to Show This Section in Homepage, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'Taxa'),
                    'default'   => true
                ), // Finish Homepage CTA Newsletter Section On/Off

                array(
                    'id'        => 'homepage_testimonials_on_off',
                    'type'      => 'switch',
                    'title'     => __('Homepage Testimonials Section On/Off', 'Taxa'),
                    'desc'      => __('If You went to Show This Section in Homepage, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'Taxa'),
                    'default'   => true
                ), // Finish Homepage Testimonials Section On/Off

                array(
                    'id'        => 'homepage_blog_on_off',
                    'type'      => 'switch',
                    'title'     => __('Homepage Blog Section On/Off', 'Taxa'),
                    'desc'      => __('If You went to Show This Section in Homepage, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'Taxa'),
                    'default'   => true
                ), // Finish Homepage Blog Section On/Off
            ) // Finish Homepage Sections Fields
        )); // Finish Homepage Sections

    
    // Global Page
    Redux::setSection( $opt_name, array(
        'title' => __( 'Global Page', 'Taxa' ),
        'id'    => 'global_page',
        'desc'  => __( 'Global Page Customize', 'Taxa' ),
        'icon'  => 'el el-globe'
    ));

        // Globalpage Banner
        Redux::setSection( $opt_name, array(
            'title'         => __('Globalpage Banner', 'Taxa'),
            'desc'          => __('Customize Globalpage Banner', 'Taxa'),
            'id'            => 'globalpage_banner',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'globalpage_banner_bg_img',
                    'type'      => 'media',
                    'title'     => __('Globalpage Banner Background Image', 'Taxa'),
                    'desc'      => __('Upload Globalpage Banner Background Image', 'Taxa'),
                    'url'       => true,
                    'default'   => array(
                        'url'   => get_template_directory_uri().'/img/common-banner.jpg'
                    )
                ) // Finish Globalpage Banner Background Image
            ) // Finish Globalpage Banner Fields
        )); // Finish Globalpage Banner


    // Blog Page
    Redux::setSection( $opt_name, array(
        'title' => __( 'Blog Page', 'Taxa' ),
        'id'    => 'blog_page',
        'desc'  => __( 'Blog Page Customize', 'Taxa' ),
        'icon'  => 'el el-pencil'
    ));

        // Blog Post
        Redux::setSection( $opt_name, array(
            'title'         => __('Blog Post', 'Taxa'),
            'desc'          => __('Customize Blog Post', 'Taxa'),
            'id'            => 'blog_post',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'blog_post_continue_read_btn_label',
                    'type'      => 'text',
                    'title'     => __('Blog Post Continue Reading Button Label', 'Taxa'),
                    'desc'      => __('Enter Blog Post Continue Reading Button Label', 'Taxa'),
                    'default'   => 'View More'
                ) // Finish Blog Post Continue Reading Button Label
            ) // Finish Blog Post Fields
        )); // Finish Blog Post

        
    // Package Template
    Redux::setSection( $opt_name, array(
        'title' => __( 'Package Template', 'Taxa' ),
        'id'    => 'package_temp',
        'desc'  => __( 'Package Template Customize', 'Taxa' ),
        'icon'  => 'el el-tags'
    ));

        // Package Template Sections
        Redux::setSection( $opt_name, array(
            'title'         => __('Package Template Sections', 'Taxa'),
            'desc'          => __('Customize Package Template Sections', 'Taxa'),
            'id'            => 'packagetemp_sections',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'packagetemp_package_on_off',
                    'type'      => 'switch',
                    'title'     => __('Package Template Package Section On/Off', 'Taxa'),
                    'desc'      => __('If You went to Show This Section in Package Template, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'Taxa'),
                    'default'   => true
                ), // Finish Package Template Package Section On/Off

                array(
                    'id'        => 'packagetemp_popular_places_on_off',
                    'type'      => 'switch',
                    'title'     => __('Package Template Popular Places Section On/Off', 'Taxa'),
                    'desc'      => __('If You went to Show This Section in Package Template, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'Taxa'),
                    'default'   => true
                ), // Finish Package Template Popular Places Section On/Off

                array(
                    'id'        => 'packagetemp_feature_on_off',
                    'type'      => 'switch',
                    'title'     => __('Package Template Feature Section On/Off', 'Taxa'),
                    'desc'      => __('If You went to Show This Section in Package Template, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'Taxa'),
                    'default'   => true
                ), // Finish Package Template Feature Section On/Off

                array(
                    'id'        => 'packagetemp_cta_newsletter_on_off',
                    'type'      => 'switch',
                    'title'     => __('Package Template CTA Newsletter Section On/Off', 'Taxa'),
                    'desc'      => __('If You went to Show This Section in Package Template, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'Taxa'),
                    'default'   => true
                ) // Finish Package Template CTA Newsletter Section On/Off
            ) // Finish Package Template Sections Fields
        )); // Finish Package Template Sections


    // About Template
    Redux::setSection( $opt_name, array(
        'title' => __( 'About Template', 'Taxa' ),
        'id'    => 'about_temp',
        'desc'  => __( 'About Template Customize', 'Taxa' ),
        'icon'  => 'el el-info-circle'
    ));

        // About Template Sections
        Redux::setSection( $opt_name, array(
            'title'         => __('About Template Sections', 'Taxa'),
            'desc'          => __('Customize About Template Sections', 'Taxa'),
            'id'            => 'abouttemp_sections',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'abouttemp_about_feature_on_off',
                    'type'      => 'switch',
                    'title'     => __('About Template About Feature Section On/Off', 'Taxa'),
                    'desc'      => __('If You went to Show This Section in About Template, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'Taxa'),
                    'default'   => true
                ), // Finish About Template About Feature Section On/Off
                
                array(
                    'id'        => 'abouttemp_cta_button_on_off',
                    'type'      => 'switch',
                    'title'     => __('About Template CTA Button Section On/Off', 'Taxa'),
                    'desc'      => __('If You went to Show This Section in About Template, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'Taxa'),
                    'default'   => true
                ), // Finish About Template CTA Button Section On/Off

                array(
                    'id'        => 'abouttemp_team_on_off',
                    'type'      => 'switch',
                    'title'     => __('About Template Team Section On/Off', 'Taxa'),
                    'desc'      => __('If You went to Show This Section in About Template, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'Taxa'),
                    'default'   => true
                ), // Finish About Template Team Section On/Off

                array(
                    'id'        => 'abouttemp_popular_places_on_off',
                    'type'      => 'switch',
                    'title'     => __('About Template Popular Places Section On/Off', 'Taxa'),
                    'desc'      => __('If You went to Show This Section in About Template, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'Taxa'),
                    'default'   => true
                ), // Finish About Template Popular Places Section On/Off

                array(
                    'id'        => 'abouttemp_testimonials_on_off',
                    'type'      => 'switch',
                    'title'     => __('About Template Testimonials Section On/Off', 'Taxa'),
                    'desc'      => __('If You went to Show This Section in About Template, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'Taxa'),
                    'default'   => true
                ) // Finish About Template Testimonials Section On/Off
            ) // Finish About Template Sections Fields
        )); // Finish About Template Sections


        // Contact Template
        Redux::setSection( $opt_name, array(
            'title' => __( 'Contact Template', 'Taxa' ),
            'id'    => 'contact_temp',
            'desc'  => __( 'Contact Template Customize', 'Taxa' ),
            'icon'  => 'el el-envelope'
        ));
    
            // Contact Template Map
            Redux::setSection( $opt_name, array(
                'title'         => __('Contact Template Map', 'Taxa'),
                'desc'          => __('Customize Contact Template Map', 'Taxa'),
                'id'            => 'contacttemp_map',
                'subsection'    => true,
                'fields'        => array(
                    array(
                        'id'        => 'contacttemp_map_on_off',
                        'type'      => 'switch',
                        'title'     => __('Contact Template Map On/Off', 'Taxa'),
                        'desc'      => __('If You went to Show This Area in Contact Template, Turn it On. Else If You Went To Hide This Section Then, Turn it Off.', 'Taxa'),
                        'default'   => true
                    ), // Finish Contact Template Map On/Off
                ) // Finish Contact Template Sections Fields
            )); // Finish Contact Template Sections

        // Contact Information
        Redux::setSection( $opt_name, array(
            'title'         => __('Contact Information', 'Taxa'),
            'desc'          => __('Customize Contact Information', 'Taxa'),
            'id'            => 'contact_info',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'contact_address',
                    'type'      => 'text',
                    'title'     => __('Contact Address', 'Taxa'),
                    'desc'      => __('Enter Contact Address', 'Taxa'),
                    'default'   => 'California, United States'
                ), // Finish Contact Address

                array(
                    'id'        => 'contact_address_description',
                    'type'      => 'text',
                    'title'     => __('Contact Address Description', 'Taxa'),
                    'desc'      => __('Enter Contact Address Description', 'Taxa'),
                    'default'   => 'Santa monica bullevard'
                ), // Finish Contact Address Description

                array(
                    'id'        => 'contact_number',
                    'type'      => 'text',
                    'title'     => __('Contact Number', 'Taxa'),
                    'desc'      => __('Enter Contact Number', 'Taxa'),
                    'default'   => '00 (440) 9865 562'
                ), // Finish Contact Number

                array(
                    'id'        => 'contact_number_description',
                    'type'      => 'text',
                    'title'     => __('Contact Number Description', 'Taxa'),
                    'desc'      => __('Enter Contact Number Description', 'Taxa'),
                    'default'   => 'Mon to Fri 9am to 6 pm'
                ), // Finish Contact Number Description

                array(
                    'id'        => 'contact_email',
                    'type'      => 'text',
                    'title'     => __('Contact E-mail', 'Taxa'),
                    'desc'      => __('Enter Contact E-mail', 'Taxa'),
                    'default'   => 'support@colorlib.com'
                ), // Finish Contact E-mail

                array(
                    'id'        => 'contact_email_description',
                    'type'      => 'text',
                    'title'     => __('Contact E-mail Description', 'Taxa'),
                    'desc'      => __('Enter Contact E-mail Description', 'Taxa'),
                    'default'   => 'Send us your query anytime!'
                ) // Finish Contact E-mail Description
            ) // Finish Contact Information Fields
        )); // Finish Contact Information

        // Contact Form
        Redux::setSection( $opt_name, array(
            'title'         => __('Contact Form', 'Taxa'),
            'desc'          => __('Customize Contact Form', 'Taxa'),
            'id'            => 'contact_form',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'form_name_placeholder',
                    'type'      => 'text',
                    'title'     => __('Form Name Placeholder', 'Taxa'),
                    'desc'      => __('Enter Form Name Placeholder', 'Taxa'),
                    'default'   => 'Enter your name'
                ), // Finish Form Name Placeholder

                array(
                    'id'        => 'form_email_placeholder',
                    'type'      => 'text',
                    'title'     => __('Form E-mail Placeholder', 'Taxa'),
                    'desc'      => __('Enter Form E-mail Placeholder', 'Taxa'),
                    'default'   => 'Enter E-mail address'
                ), // Finish Form E-mail Placeholder

                array(
                    'id'        => 'form_subject_placeholder',
                    'type'      => 'text',
                    'title'     => __('Form Subject Placeholder', 'Taxa'),
                    'desc'      => __('Enter Form Subject Placeholder', 'Taxa'),
                    'default'   => 'Enter Subject'
                ), // Finish Form Subject Placeholder

                array(
                    'id'        => 'form_message_placeholder',
                    'type'      => 'text',
                    'title'     => __('Form Message Placeholder', 'Taxa'),
                    'desc'      => __('Enter Form Message Placeholder', 'Taxa'),
                    'default'   => 'Enter Message'
                ), // Finish Form Message Placeholder

                array(
                    'id'        => 'form_submit_btn_label',
                    'type'      => 'text',
                    'title'     => __('Form Submit Button Label', 'Taxa'),
                    'desc'      => __('Enter Form Submit Button Label', 'Taxa'),
                    'default'   => 'Send Message'
                ), // Finish Form Submit Button Label

                array(
                    'id'        => 'form_receiver_email',
                    'type'      => 'text',
                    'title'     => __('Form Receiver E-mail', 'Taxa'),
                    'desc'      => __('Enter Form Receiver E-mail', 'Taxa'),
                    'default'   => 'rockybd1995@gmail.com'
                ), // Finish Form Receiver E-mail

                array(
                    'id'        => 'form_subject',
                    'type'      => 'text',
                    'title'     => __('Form Subject', 'Taxa'),
                    'desc'      => __('Enter Form Subject', 'Taxa'),
                    'default'   => 'You have a message from your Taxa Adventure.'
                ), // Finish Form Subject

                array(
                    'id'        => 'form_success_message',
                    'type'      => 'text',
                    'title'     => __('Form Success Message', 'Taxa'),
                    'desc'      => __('Enter Form Success Message', 'Taxa'),
                    'default'   => 'Thank you for your message. It has been sent.'
                ), // Finish Form Success Message
            ) // Finish Contact Form Fields
        )); // Finish Contact Form


    // Book Trip Template
    Redux::setSection( $opt_name, array(
        'title' => __( 'Book Trip Template', 'Taxa' ),
        'id'    => 'bookTrip_temp',
        'desc'  => __( 'Book Trip Template Customize', 'Taxa' ),
        'icon'  => 'el el-plane'
    ));

        // Book Trip Form
        Redux::setSection( $opt_name, array(
            'title'         => __('Book Trip Form', 'Taxa'),
            'desc'          => __('Customize Book Trip Form', 'Taxa'),
            'id'            => 'bookTrip_form',
            'subsection'    => true,
            'fields'        => array(
                array(
                    'id'        => 'bookTrip_form_bg_img',
                    'type'      => 'media',
                    'title'     => __('Book Trip Form Background Image', 'Taxa'),
                    'desc'      => __('Upload Book Trip Form Background Image', 'Taxa'),
                    'url'       => true,
                    'default'   => array(
                        'url'   => get_template_directory_uri().'/img/trip-form-bg.jpg'
                    )
                ), // Finish Book Trip Form Background Image
                
                array(
                    'id'        => 'bookTrip_form_title',
                    'type'      => 'text',
                    'title'     => __('Book Trip Form Title', 'Taxa'),
                    'desc'      => __('Enter Book Trip Form Title', 'Taxa'),
                    'default'   => 'Book a Trip<br>for your next Tour'
                ), // Finish Book Trip Form Title
                
                array(
                    'id'        => 'bookTrip_form_class_label',
                    'type'      => 'text',
                    'title'     => __('Book Trip Form Class Label', 'Taxa'),
                    'desc'      => __('Enter Book Trip Form Class Label', 'Taxa'),
                    'default'   => 'Class:'
                ), // Finish Book Trip Form Class Label
                
                array(
                    'id'        => 'bookTrip_form_fromct_label',
                    'type'      => 'text',
                    'title'     => __('Book Trip Form From(City) Label', 'Taxa'),
                    'desc'      => __('Enter Book Trip Form From(City) Label', 'Taxa'),
                    'default'   => 'From(City):'
                ), // Finish Book Trip Form From(City) Label
                
                array(
                    'id'        => 'bookTrip_form_fromct_placeholder',
                    'type'      => 'text',
                    'title'     => __('Book Trip Form From(City) Placeholder', 'Taxa'),
                    'desc'      => __('Enter Book Trip Form From(City) Placeholder', 'Taxa'),
                    'default'   => 'From'
                ), // Finish Book Trip Form From(City) Placeholder
                
                array(
                    'id'        => 'bookTrip_form_toct_label',
                    'type'      => 'text',
                    'title'     => __('Book Trip Form To(City) Label', 'Taxa'),
                    'desc'      => __('Enter Book Trip Form To(City) Label', 'Taxa'),
                    'default'   => 'To(City):'
                ), // Finish Book Trip Form To(City) Label
                
                array(
                    'id'        => 'bookTrip_form_toct_placeholder',
                    'type'      => 'text',
                    'title'     => __('Book Trip Form To(City) Placeholder', 'Taxa'),
                    'desc'      => __('Enter Book Trip Form To(City) Placeholder', 'Taxa'),
                    'default'   => 'To'
                ), // Finish Book Trip Form To(City) Placeholder
                
                array(
                    'id'        => 'bookTrip_form_depart_label',
                    'type'      => 'text',
                    'title'     => __('Book Trip Form Depart Label', 'Taxa'),
                    'desc'      => __('Enter Book Trip Form Depart Label', 'Taxa'),
                    'default'   => 'Depart:'
                ), // Finish Book Trip Form Depart Label
                
                array(
                    'id'        => 'bookTrip_form_return_label',
                    'type'      => 'text',
                    'title'     => __('Book Trip Form Return Label', 'Taxa'),
                    'desc'      => __('Enter Book Trip Form Return Label', 'Taxa'),
                    'default'   => 'Return:'
                ), // Finish Book Trip Form Return Label
                
                array(
                    'id'        => 'bookTrip_form_adults_label',
                    'type'      => 'text',
                    'title'     => __('Book Trip Form Adults Label', 'Taxa'),
                    'desc'      => __('Enter Book Trip Form Adults Label', 'Taxa'),
                    'default'   => 'Adults (12+ yrs):'
                ), // Finish Book Trip Form Adults Label
                
                array(
                    'id'        => 'bookTrip_form_child_label',
                    'type'      => 'text',
                    'title'     => __('Book Trip Form Child Label', 'Taxa'),
                    'desc'      => __('Enter Book Trip Form Child Label', 'Taxa'),
                    'default'   => 'Child (0-11 yrs):'
                ), // Finish Book Trip Form Child Label
                
                array(
                    'id'        => 'bookTrip_form_person_limit',
                    'type'      => 'text',
                    'title'     => __('Book Trip Form Person Limit', 'Taxa'),
                    'desc'      => __('Enter Book Trip Form Person Limit', 'Taxa'),
                    'default'   => '9'
                ), // Finish Book Trip Form Person Limit

                array(
                    'id'        => 'bookTrip_form_submit_btn_label',
                    'type'      => 'text',
                    'title'     => __('Book Trip Form Submit Button Label', 'Taxa'),
                    'desc'      => __('Enter Book Trip Form Submit Button Label', 'Taxa'),
                    'default'   => 'Book Trip'
                ), // Finish Book Trip Form Submit Button Label

                array(
                    'id'        => 'bookTrip_form_receiver_email',
                    'type'      => 'text',
                    'title'     => __('Book Trip Form Receiver E-mail', 'Taxa'),
                    'desc'      => __('Enter Book Trip Form Receiver E-mail', 'Taxa'),
                    'default'   => 'rockybd1995@gmail.com'
                ), // Finish Book Trip Form Receiver E-mail

                array(
                    'id'        => 'bookTrip_form_subject',
                    'type'      => 'text',
                    'title'     => __('Book Trip Form Subject', 'Taxa'),
                    'desc'      => __('Enter Book Trip Form Subject', 'Taxa'),
                    'default'   => 'Book Trip'
                ), // Finish Book Trip Form Subject

                array(
                    'id'        => 'bookTrip_form_header',
                    'type'      => 'text',
                    'title'     => __('Book Trip Form Header', 'Taxa'),
                    'desc'      => __('Enter Book Trip Form Header', 'Taxa'),
                    'default'   => 'A Trip Booked from Taxa Adventure'
                ), // Finish Book Trip Form Header

                array(
                    'id'        => 'bookTrip_form_success_message',
                    'type'      => 'text',
                    'title'     => __('Book Trip Form Success Message', 'Taxa'),
                    'desc'      => __('Enter Book Trip Form Success Message', 'Taxa'),
                    'default'   => 'Thank you for booking a trip. We will contact you soon.'
                ), // Finish Book Trip Form Success Message
            ) // Finish Book Trip Template Sections Fields
        )); // Finish Book Trip Template Sections