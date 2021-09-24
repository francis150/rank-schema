<?php
/**
 * Plugin Name: Rank Schema Generator
 * Description: Are you tired of having to code each page's unique schema code? Give your site the boost it needs by applying Rank Schema Markup today. We've eliminated any technical difficulties for you and worked with top SEO experts to ensure that we're providing a product that will benefit your website.
 * Version: 3.0.0
 * Requires at least: 5.2
 * Requires PHP: 7.2
 * Author: Rankfortress Digital Agency
 * Author URI: https://rankfortress.com/
 * Text Domain: rank-schema
 */

defined( 'ABSPATH' ) or die( 'Beware if Dogs!' );

class RankSchemaGenerator 
{
    function __construct()
    {
        @ini_set( 'post_max_size', '64M');
        add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );
        add_action( 'wp_head', array( $this, 'apply_schema_markups' ) );
        add_action('admin_enqueue_scripts', array($this, 'register_head'));
        add_action('admin_footer', array($this, 'register_body'));
    }

    public function apply_schema_markups() {
        if (file_exists( WP_CONTENT_DIR. '/rank-schema-config/config.json' ) && file_exists( WP_CONTENT_DIR. '/rank-schema-config/markups.json' )) {
            
            $config = json_decode(file_get_contents( WP_CONTENT_DIR. '/rank-schema-config/config.json' ), true);
            $markupFile = json_decode(file_get_contents( WP_CONTENT_DIR. '/rank-schema-config/markups.json' ), true);

            if ($config['activated']) {
                foreach ($markupFile['schemaMap'] as $markup) {
                    
                    if ($markup['url'] == get_page_link()) {

                        echo '
                        <!-- Schema Markup by Rank Schema Plugin | for '.$markup['url'].'-->
                        ';
                        
                        foreach ($markup['indexMap'] as $index) {
                            
                            echo '
                            <script type="application/ld+json">
                            '.$markupFile['schemaMarkups'][$index].'
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
        require_once plugin_dir_path(__FILE__) . 'src/admin-page.php';
    }

    public function register_head()
    {
        wp_enqueue_style('main_style', plugins_url( '/assets/styles.css', __FILE__ ));
    }

    public function register_body()
    {
        wp_enqueue_script('main_script', plugins_url( '/assets/scripts.js', __FILE__ ));
    }

    
}

if ( class_exists( 'RankSchemaGenerator' ) ) 
{
    $rankSchemaGenerator = new RankSchemaGenerator();
}

/* DEVELOPERS: Francis Dela Victoria, Paul Bryan Reyes */