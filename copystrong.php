<?php
/*
Plugin Name: Copystrong Plugin
Plugin URI:  https://script.wordpress.org/wordpress/copystrong.zip
Description: Copystrong Script Helper
Version:     1.0
Author:      Axel Cho
Author URI:  http://axelcho.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// Add Shortcode
function copystong_shortcode($atts)
{

// Attributes
    $atts = shortcode_atts(
        array(
            'code' => '',
        ),
        $atts
    );

    return "<script src='https://api.copystrong.com/advanced/config/" . $atts['code'] . ".js'></script>";

}

add_shortcode('copystrong', 'copystong_shortcode');