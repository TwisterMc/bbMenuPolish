<?php
/**
* Plugin Name: Beaver Builder Menu Polish
* Plugin URI: http://www.twistermc.com/
* Description: Adding drop down menu indicators and search to mobile.
* Version: 0.2
* Author: Thomas McMahon
* Author URI: http://www.twistermc.com/
* License: A "Slug" license name e.g. GPL12
*/

/**
 * Add Search Box to Mobile
 * Adds a search box to mobile, below the header.
 */
function bbMenuPolish_addMobileSearch(){
    if ( wp_is_mobile() ) {
        get_search_form();
    }
}

add_action( 'fl_after_header', 'bbMenuPolish_addMobileSearch' );

/**
 * Add Custom CSS 
 * For Search and Dropdown Arrows
 */

function bbMenuPolish_AddCSS() {
    // Respects SSL, Style.css is relative to the current file
    wp_register_style( 'bbMenuPolish-css', plugins_url('style.css', __FILE__) );
    wp_enqueue_style( 'bbMenuPolish-css' );
}

add_action( 'wp_enqueue_scripts', 'bbMenuPolish_AddCSS' );
