<?php
namespace WPHR\HR_MANAGER\Framework\Traits;

/**
 * Ajax Trait
 *
 * @package WPHR\HR_MANAGER\Framework\Traits
 */
trait Ajax {
    /**
     * Verify request nonce
     *
     * @param  string  the nonce action name
     *
     * @return void
     */
    public function verify_nonce( $action ) {
        if ( ! isset( $_REQUEST['_wpnonce'] ) || ! wp_verify_nonce( sanitize_text_field( $_REQUEST['_wpnonce'] ), $action ) ) {
            $this->send_error( __( 'Error: Nonce verification failed', 'wphr' ) );
        }
    }

    /**
     * Wrapper function for sending success response
     *
     * @param  mixed $data
     *
     * @return void
     */
    public function send_success( $data = null ) {
        wp_send_json_success( $data );
    }

    /**
     * Wrapper function for sending error
     *
     * @param  mixed $data
     *
     * @return void
     */
    public function send_error( $data = null ) {
        wp_send_json_error( $data );
    }
}
