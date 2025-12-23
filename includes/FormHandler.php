<?php


class FormHandler {

    public function __construct() {

        if ( ! isset( $_POST['submit_form'] ) ) {
            return;
        }

        if ( ! isset( $_POST['_wpnonce'] ) || ! wp_verify_nonce( $_POST['_wpnonce'], 'save_popup' ) ) {
            wp_die( 'Are you cheating?' );
        }

        if ( ! current_user_can( 'manage_options' ) ) {
            wp_die( 'Are you cheating?' );
        }

        $this->insert_option();
  
    }

    public function insert_option( ) {

    $popify_text       = sanitize_text_field( $_POST['popify_text'] ?? '' );
    $popify_width      = intval( $_POST['popify_width'] ?? 0 );
    $popify_height     = intval( $_POST['popify_height'] ?? 0 );
    $popify_text_color = sanitize_hex_color( $_POST['popify_text_color'] ?? '' );
    $popify_font_size  = intval( $_POST['popify_font_size'] ?? 0 );

    $form_data = [
        'text'       => $popify_text,
        'width'      => $popify_width,
        'height'     => $popify_height,
        'text_color' => $popify_text_color,
        'font_size'  => $popify_font_size,
    ];

    if ( get_option('popify_option') === false ) {
        add_option('popify_option', $form_data);
    } else {
        update_option('popify_option', $form_data);
    }

    }
}

