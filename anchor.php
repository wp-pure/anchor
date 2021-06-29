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


// the actual anchor shortcode function
function anchor_shortcode( $atts ) {
    
    // get the id parameter from the shortcode
    $a = shortcode_atts( array(
        'id' => 0
    ), $atts );

    // provided we have an id parameter
    if ( !empty( $a['id'] ) ) {

        // return the anchor
        return '<a name="' . esc_attr( $a['id'] ) . '"></a>';

    }

}
add_shortcode( 'anchor', 'anchor_shortcode' );

