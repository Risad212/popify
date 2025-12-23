<?php
/*
Plugin Name: Popify
Plugin URI: 
Description: simple popup builder
Version: 1.0.0
Author: hmrisad
Author URI: 
License: GPL3
License URI: http://www.gnu.org/licenses/gpl.html
Text Domain: popify
*/


if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// inclused folder
include_once 'includes/AssignMenu.php';
include_once 'includes/FormHandler.php';
include_once 'view/frontend/popup.php';

final class Popify{

    /**
     * define plugin version
     * 
     * @const
     */
     const version = '1.0.0';

    /**
    * Class construcotr
    * 
    * @access private
    */
    private function __construct() {
        $this->define_constants();

        add_action( 'plugins_loaded', [ $this, 'plugin_setup' ] );
        add_action( 'admin_enqueue_scripts', [ $this, 'register_admin_assets' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'register_frontend_assets' ] );
    }

    /**
    * Initializes a singleton instance
    *
    * @access public
    */
    public static function plugin_init() {
        static $instance = false;

        if ( ! $instance ) {
            $instance = new self();
        }

        return $instance;
    }

    /**
    * Define the required plugin constants
    *
    * @access public
    */
    public function define_constants() {
        define( 'PY_VERSION',  self::version );
        define( 'PY_FILE',     __FILE__ );
        define( 'PY_PATH',     __DIR__ );
        define( 'PY_URL',      plugins_url( '', PY_FILE ) );
        define( 'PY_ASSETS',   PY_URL . '/assets' );
      
    }

    /**
     * asset load in Admin
     * 
     * @access public
     */
    public function register_admin_assets(){
        wp_enqueue_style( 'py-admin.css', PY_ASSETS. '/css/admin.css' );
        wp_enqueue_script( 'py-admin-js', PY_ASSETS. '/js/admin.js', ['jquery'], false, true );
    }

    /**
     * asset load in Frontend
     * 
     * @access public
     */
    public function register_frontend_assets(){
        wp_enqueue_style( 'py-frontend.css', PY_ASSETS. '/css/frontend.css' );
        wp_enqueue_script( 'py-frontend-js', PY_ASSETS. '/js/frontend.js', ['jquery'], false, true );
    }

    /**
    * setup main class
    *
    * @access public
    */
    public function plugin_setup(){
         if( is_admin() ){
             new AssignMenu();
             new FormHandler();
         }

    }

}

Popify::plugin_init();
