<?php


class AssignMenu {

    function __construct() {
        add_action( 'admin_menu', [ $this, 'admin_menu' ] );
    }

    /**
     * Register admin menu
     *
     * @access public
     */
    public function admin_menu() {
        add_menu_page(
        __( 'Popify', 'popify' ), 
        __( 'Popify', 'popify' ), 
        'manage_options',                            
        'popify',                                 
        [ $this, 'plugin_page' ],                    
        'dashicons-bell'                      
    );

    }

    /**
     * Render the plugin page
     *
     * @access public
     */
    public function plugin_page() {
        require_once PY_PATH . '/view/admin/form.php';
    }
}
