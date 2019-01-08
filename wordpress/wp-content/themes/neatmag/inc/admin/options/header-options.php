<?php
/**
* Header options
*
* @package NeatMag WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function neatmag_header_options($wp_customize) {

    // Header
    $wp_customize->add_section( 'sc_neatmag_header', array( 'title' => esc_html__( 'Header Options', 'neatmag' ), 'panel' => 'neatmag_main_options_panel', 'priority' => 240 ) );

    $wp_customize->add_setting( 'neatmag_options[hide_header_content]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'neatmag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'neatmag_hide_header_content_control', array( 'label' => esc_html__( 'Hide Header Content', 'neatmag' ), 'section' => 'sc_neatmag_header', 'settings' => 'neatmag_options[hide_header_content]', 'type' => 'checkbox', ) );

}