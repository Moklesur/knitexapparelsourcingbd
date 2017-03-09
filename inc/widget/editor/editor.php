<?php
/**
 * Themetim Editor Widget.
 *
 * @package themetim
 */

class Themetim_editor_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'themetim-editor-widget',
			__( 'ThemeTim Editor Widget', 'themetim' ),
			array(
				'description' => __( 'ThemeTim Editor Widget', 'themetim' ),
			),
			array(),

			array(
				'heading_alignment' => array(
					'type' => 'select',
					'label' => __( 'Text Alignment', 'themetim' ),
					'default' => 'text-left',
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
					'default' => '14'
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
				'sub_title' => array(
					'type' => 'text',
					'label' => __( 'Sub Heading', 'themetim' ),
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
				'button_text' => array(
					'type' => 'text',
					'label' => __('Button Title', 'themetim'),
					'default' => ''
				),
				'button_style' => array(
					'type' => 'select',
					'label' => __( 'Button Style', 'themetim' ),
					'default' => 'btn-default',
					'options' => array(
						'btn-default' => __( 'Default', 'themetim' ),
						'btn-primary' => __( 'Primary', 'themetim' ),
						'btn-success' => __( 'Success', 'themetim' ),
					)
				),
				'button_url' => array(
					'type' => 'link',
					'label' => __('Button URL', 'themetim'),
					'default' => ''
				),
			)

		);
	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'themetim-editor-widget', __FILE__, 'Themetim_editor_Widget' );
