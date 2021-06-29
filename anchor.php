<?php

/*
Plugin Name: Anchor Shortocde
Plugin URI: https://github.com/wp-pure/anchor
Description: A dead simple plugin to create anchor tags inside your content to easily facilitate anchor links. Like so: [anchor id="my-anchor"]
Version: 0.0.1
Author: James Pederson
Author URI: https://jpederson.com
License: GPL2
*/


// add an 'anchor' shortcode
add_shortcode( 'anchor_shortcode', 'anchor' );


// the actual anchor shortcode function
function anchor_shortcode( $atts ) {
    
    // get the id parameter from the shortcode
    $a = shortcode_atts( array(
        'id' => 0
    ), $atts );

    // provided we have an id parameter
    if ( $a['id'] > 0 ) {

        // return the anchor
        return '<a name="' . esc_attr( $a['id'] ) . '"></a>';

    }

}

