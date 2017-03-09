<?php
/**
 * Pricing widget.
 *
 * @package themetim
 */

class Themetim_Pricing_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'themetim-pricing-widget',
			__( 'ThemeTim Pricing Table Widget', 'themetim' ),
			array(
				'description' => __( 'Pricing Table Widget', 'themetim' ),
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

				'pricing' => array(
					'type'       => 'repeater',
					'label'      => __( 'Pricing', 'themetim' ),
					'item_name'  => __( 'Item', 'themetim' ),
					'item_label' => array(
						'selector'     => "[id*='prefix-themetim-pricing-']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'pricing_icon' => array(
							'type' => 'icon',
							'label' => __('Select an icon', 'themetim'),
						),
						'pricing_icon_size' => array(
							'type' => 'number',
							'label' => __( 'Icon Size', 'themetim' ),
							'default' => '40'
						),
						'pricing_icon_color' => array(
							'type' => 'color',
							'label' => __( 'Icon Color', 'themetim' ),
							'default' => '#000'
						),
						'pricing_title' => array(
							'type'  => 'text',
							'label' => __( 'Title', 'themetim' ),
						),
						'pricing_price' => array(
							'type'  => 'text',
							'label' => __( 'Price', 'themetim' ),
						),
						'pricing_texteditor' => array(
							'type' => 'tinymce',
							'label' => __( '', 'themetim' ),
							'default' => '',
							'rows' => 7,
							'default_editor' => 'html',
							'button_filters' => array(
								'mce_buttons' => array( $this, 'filter_mce_buttons' ),
								'mce_buttons_2' => array( $this, 'filter_mce_buttons_2' ),
								'mce_buttons_3' => array( $this, 'filter_mce_buttons_3' ),
								'mce_buttons_4' => array( $this, 'filter_mce_buttons_5' ),
								'quicktags_settings' => array( $this, 'filter_quicktags_settings' ),
							),
						),
						'pricing_button_text' => array(
							'type' => 'text',
							'label' => __('Button Title', 'themetim'),
							'default' => ''
						),
						'pricing_button_style' => array(
							'type' => 'select',
							'label' => __( 'Button Style', 'themetim' ),
							'default' => 'btn-default',
							'options' => array(
								'btn-default' => __( 'Default', 'themetim' ),
								'btn-primary' => __( 'Primary', 'themetim' ),
								'btn-success' => __( 'Success', 'themetim' ),
							)
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

siteorigin_widget_register( 'themetim-pricing-widget', __FILE__, 'Themetim_Pricing_Widget' );
