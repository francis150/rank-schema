<?php
/**
 * Plugin Name: Super Plugin
 * Description: Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem ratione animi quasi ea odit deleniti nihil aut nam omnis alias dicta debitis, officiis ullam odio.
 * Version: 1.10.3
 * Requires at least: 5.2
 * Requires PHP: 7.2
 * Author: Francis Dela Victoria
 * Author URI: https://author.example.com/
 * Text Domain: super-plugin
 */


// ADD SCHEMA CODE TO THE HEAD
add_action( 'wp_head', function () {

    $api_call = 'https://schema-gen-api.herokuapp.com/api/schema-generator';

    $api_res = file_get_contents($api_call);
    $res_array = json_decode($api_res, true);

    if ( is_front_page() || is_home() ) {
        
        foreach ($res_array['results'][0]['schemaMarkups'] as $markup) {
            
            echo '
            <!-- Schema Markup by Rank Tools Generator-->
            <script type="application/ld+json">
            '.str_replace("\/","/",json_encode($markup)).'
            </script>
            
            ';

        }

    }
    
}, 10 );