<?php

namespace cBuilder\Classes;

use cBuilder\Helpers\CCBFieldsHelper;

class CCBFrontController {
    public static function init() {
        add_action('wp_enqueue_scripts', function (){
            wp_enqueue_script("jquery");
        });
        add_shortcode('stm-calc', [self::class, 'render_calculator']);
    }

	/**
	 * todo all template params must be here in controller
	 */
    public static function render_calculator($attr) {
        wp_enqueue_style('cc-builder-awesome-css', CALC_URL . '/frontend/dist/css/all.min.css', [], CALC_VERSION);
        wp_enqueue_style('calc-builder-app-css', CALC_URL . '/frontend/dist/bundle.css', [], CALC_VERSION);
        wp_enqueue_style('ccb-material-css', CALC_URL . '/frontend/dist/css/material.css', [], CALC_VERSION);
        wp_enqueue_style('ccb-material-style-css', CALC_URL . '/frontend/dist/css/material-styles.css', [], CALC_VERSION);

        $params = shortcode_atts(array(
            'id' => null,
        ), $attr);

        $language = substr( get_bloginfo( 'language' ), 0, 2 );

        if ( !is_admin() || !empty($_GET['page']) && $_GET['action'] === 'cost_calculator_builder' ) {
            wp_enqueue_script('calc-builder-main-js', CALC_URL . '/frontend/dist/bundle.js', [], CALC_VERSION);
            wp_localize_script('calc-builder-main-js', 'ajax_window',
                array(
                    'ajax_url' => admin_url('admin-ajax.php'),
                    'language' => $language ,
                    'templates' => CCBFieldsHelper::get_fields_templates())
            );
        }


        if(isset($params['id']) && get_post($params['id'])) {
            $calc_id = $params['id'];
            return \cBuilder\Classes\CCBTemplate::load('/frontend/render',
	            ['calc_id' => $calc_id,
	             'language' => $language ,
	             'translations' => CCBTranslations::get_frontend_translations(),
	            ]);
        }
        return '<p style="text-align: center">' . __('No selected calculator', 'cost-calculator-builder') . '</p>';
    }
}