<?php
/**
 * Brand widget.
 *
 * @package themetim
 */

class Themetim_Brand_Widget extends SiteOrigin_Widget {

    function __construct() {

        parent::__construct(
            'themetim-brand-widget',
            __( 'ThemeTim Brand Widget', 'themetim' ),
            array(
                'description' => __( 'Brand Widget', 'themetim' ),
            ),
            array(),

            array(
                'heading_alignment' => array(
                    'type' => 'select',
                    'label' => __( 'Text Alignment', 'themetim' ),
                    'default' => 'text-center',
                    'options' => array(
                        'text-left' => __( 'Text Left', 'themetim' ),
                        'text-center' => __( 'Text Center', 'themetim' ),
                        'text-right' => __( 'Text Right', 'themetim' ),
                    )
                ),
                'title' => array(
                    'type'  => 'text',
                    'label' => __( 'Heading', 'themetim' ),
                ),

                'brand' => array(
                    'type'       => 'repeater',
                    'label'      => __( 'Brand', 'themetim' ),
                    'item_name'  => __( 'Item', 'themetim' ),
                    'item_label' => array(
                        'selector'     => "[id*='prefix-themetim-brands-']",
                        'update_event' => 'change',
                        'value_method' => 'val',
                    ),
                    'fields' => array(
                        'profile_picture' => array(
                            'type'     => 'media',
                            'library'  => 'image',
                            'label'    => __( 'Image', 'themetim' ),
                            'fallback' => true,
                        ),
                        'pricing_button_url' => array(
                            'type' => 'link',
                            'label' => __('Button URL', 'themetim'),
                            'default' => ''
                        ),
                    ),
                ),
            )

        );
    }

    function get_template_name( $instance ) {
        return 'default';
    }
}

siteorigin_widget_register( 'themetim-brand-widget', __FILE__, 'Themetim_Brand_Widget' );
