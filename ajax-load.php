<?php
/**
 * Plugin Name: Ajax Load Plugn
 * Description: This is Ajax Load Plugin
 * Version: 1.0.0
 * Author: Hasan Mahmud
 * Author URI: http://hasin.me
 * Plugin URI: http://google.com
 */


 add_action('admin_enqueue_scripts', function($hook){
    // if('ajax-plugin_dev' == $hook) {
        wp_enqueue_style( 'pure-grid-css', '//cdn.jsdelivr.net/npm/purecss@3.0.0/build/pure-min.css' );
        wp_enqueue_style( 'ajax-css', plugin_dir_url(__FILE__) . 'assets/css/style.css', null, time() );
        wp_enqueue_script( 'ajax-js', plugin_dir_url(__FILE__) . 'assets/js/ajax.js', array('jquery'), time(), true );
    //}
 });

function ajax_plugin_func() {

    ?>
        <div class="container" style="padding-top:20px;">
            <h1>Ajax Plugin</h1>
            <div class="pure-g">
                <div class="pure-u-2-5" style="background-color: #ddd;">
                    <div class="plugin-side-option">
                        <button class="button-success pure-button">Add New date</button>
                    </div>
                </div>
                <div class="pure-u-7-12" style="background-color: #ccc;">
                    <div class="plugin-demo-content">
                        <h4 class="plugin-result-title">Result</h4>
                        <div id="plugin-demo-result" class="plugin-result"></div>
                    </div>
                </div>
            </div>
        </div>

    <?php   
}

 function alp_register_custom_menu() {
    add_menu_page(
        __('Ajax Plugin', 'ajax-plugin'),
        'Ajax Setting',
        'manage_options',
        'ajax-plugin_dev',
		'ajax_plugin_func',
		'dashicons-controls-repeat',
        100,
    );
 }

 add_action('admin_menu', 'alp_register_custom_menu');


