<?php
/**
 * Plugin Name: Rank Schema Generator
 * Description: Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem ratione animi quasi ea odit deleniti nihil aut nam omnis alias dicta debitis, officiis ullam odio.
 * Version: 1.10.3
 * Requires at least: 5.2
 * Requires PHP: 7.2
 * Author: Francis Dela Victoria
 * Author URI: https://author.example.com/
 * Text Domain: rank-schema
 */

defined( 'ABSPATH' ) or die( 'Beware if Dogs!' );

class RankSchemaGenerator 
{
    function __construct()
    {
        add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
        add_action( 'wp_head', array( $this, 'apply_schema_markups' ) );
    }

    public function apply_schema_markups()
    {
        if ( file_exists( WP_PLUGIN_DIR . "//rank-schema//markups.json" ) )
        {
            $markupsFile = WP_PLUGIN_DIR . "//rank-schema//markups.json";

            $markups = file_get_contents($markupsFile);
            $res_array = json_decode($markups, true);

            if ( is_front_page() || is_home() ) {
                
                foreach ( $res_array['results'][0]['schemaMarkups'] as $markup ) {
                    
                    echo '
                    <!-- Schema Markup by Rank Tools Generator-->
                    <script type="application/ld+json">
                    '.str_replace("\/","/",json_encode($markup, JSON_PRETTY_PRINT)).'
                    </script>
                    
                    ';

                }

            } else {

                foreach ( $res_array['results'] as $entity ) {
                    if ( $entity['url'] == get_page_link() ) {
                        
                        foreach ($entity['schemaMarkups'] as $markup) {
                            
                            echo '
                            <!-- Schema Markup for '.$entity['url'].' by Rank Tools Generator-->
                            <script type="application/ld+json">
                            '.str_replace("\/","/",json_encode($markup, JSON_PRETTY_PRINT)).'
                            </script>
                            
                            ';

                        }
                    }
                }
            }
        }
    }

    public function add_admin_pages()
    {
        add_menu_page('Rank Schema Generator', 'Rank Schema', 'manage_options', 'rank_schema_generator', array( $this, 'admin_index' ), 'dashicons-editor-code', 110 );
    }

    public function admin_index()
    {
        require_once plugin_dir_path(__FILE__) . 'views/admin-page.php';
    }
}

if ( class_exists( 'RankSchemaGenerator' ) ) { $rankSchemaGenerator = new RankSchemaGenerator(); }