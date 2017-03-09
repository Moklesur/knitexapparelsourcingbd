<?php
/**
 * Camera Slider widget.
 *
 * @package themetim
 */

class Themetim_CameraSlider_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'themetim-camera-slider-widget',
			__( 'ThemeTim Camera Slider Widget', 'themetim' ),
			array(
				'description' => __( 'Camera Slider Widget', 'themetim' ),
			),
			array(),

			array(
				'CameraSlider' => array(
					'type'       => 'repeater',
					'label'      => __( 'Camera Slider', 'themetim' ),
					'item_name'  => __( 'Item', 'themetim' ),
					'item_label' => array(
						'selector'     => "[id*='prefix-themetim-camera-slider-']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
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
						'text_position' => array(
							'type' => 'select',
							'label' => __( 'Text Position', 'themetim' ),
							'default' => '0 auto',
							'options' => array(
								'auto auto auto 0' => __( 'Text Left', 'themetim' ),
								'0 auto' => __( 'Text Center', 'themetim' ),
								'auto 0 auto auto' => __( 'Text Right', 'themetim' ),
							)
						),
						'CameraSlider_title' => array(
							'type'  => 'text',
							'label' => __( 'Title', 'themetim' ),
						),
						'CameraSlider_title_color' => array(
							'type' => 'color',
							'label' => __( 'Title Color', 'themetim' ),
							'default' => '#000'
						),
						'CameraSlider_subtitle' => array(
							'type'  => 'text',
							'label' => __( 'Sub Title', 'themetim' ),
						),
						'CameraSlider_subtitle_color' => array(
							'type' => 'color',
							'label' => __( 'Sub Title Color', 'themetim' ),
							'default' => '#000'
						),
						'CameraSlider_image' => array(
							'type'     => 'media',
							'library'  => 'image',
							'label'    => __( 'Slide Image', 'themetim' ),
							'fallback' => true,
						),
						'CameraSlider_texteditor' => array(
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
						'CameraSlider_button_text' => array(
							'type' => 'text',
							'label' => __('Button Title', 'themetim'),
							'default' => ''
						),
						'CameraSlider_button_style' => array(
							'type' => 'select',
							'label' => __( 'Button Style', 'themetim' ),
							'default' => 'btn-default',
							'options' => array(
								'btn-default' => __( 'Default', 'themetim' ),
								'btn-primary' => __( 'Primary', 'themetim' ),
								'btn-success' => __( 'Success', 'themetim' ),
							)
						),
						'CameraSlider_button_url' => array(
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

siteorigin_widget_register( 'themetim-camera-slider-widget', __FILE__, 'Themetim_CameraSlider_Widget' );
