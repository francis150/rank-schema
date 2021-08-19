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
        if (file_exists(plugin_dir_path( __FILE__ ). 'src/config.json') && file_exists(plugin_dir_path( __FILE__ ). 'src/markups.json')) {
            
            $config = json_decode(file_get_contents(plugin_dir_path( __FILE__ ). 'src/config.json'), true);
            $markupFile = json_decode(file_get_contents(plugin_dir_path( __FILE__ ). 'src/markups.json'), true);

            if ($config['activated']) {
                if ( is_front_page() || is_home() ) {

                    foreach ($markupFile['results'][0]['schemaMarkups'] as $markup) {
                        
                        echo '
                        <!-- Schema Markup by Rank Tools Generator-->
                        <script type="application/ld+json">
                        '.$markup.'
                        </script>
                        ';
                    }

                } else {

                    foreach ($markupFile['results'] as $entity) {
                        
                        if ($entity['url'] == get_page_link()) {
                            
                            foreach ($entity['schemaMarkups'] as $markup) {
                                
                                echo '
                                <!-- Schema Markup by Rank Tools Generator for '.$entity['url'].'-->
                                <script type="application/ld+json">
                                '.$markup.'
                                </script>
                                ';
                                
                            }
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
        require_once plugin_dir_path(__FILE__) . 'src/admin-page.php';
    }
}

if ( class_exists( 'RankSchemaGenerator' ) ) { $rankSchemaGenerator = new RankSchemaGenerator(); }