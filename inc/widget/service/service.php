<?php
/**
 * Service widget.
 *
 * @package themetim
 */

class Themetim_Service_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'themetim-service-widget',
			__( 'ThemeTim Service Widget', 'themetim' ),
			array(
				'description' => __( 'Service Widget', 'themetim' ),
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
				'icon' => array(
					'type' => 'icon',
					'label' => __('Select an icon', 'themetim'),
				),
				'icon_size' => array(
					'type' => 'number',
					'label' => __( 'Icon Size', 'themetim' ),
					'default' => '40'
				),
				'icon_color' => array(
					'type' => 'color',
					'label' => __( 'Icon Color', 'themetim' ),
					'default' => '#000'
				),
				'title' => array(
					'type'  => 'text',
					'label' => __( 'Heading', 'themetim' ),
				),
				'texteditor' => array(
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
			)

		);
	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'themetim-service-widget', __FILE__, 'Themetim_Service_Widget' );
