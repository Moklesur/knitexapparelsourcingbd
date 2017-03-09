<?php
/**
 * Testimonial widget.
 *
 * @package themetim
 */

class Themetim_Testimonial_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'themetim-testimonial-widget',
			__( 'ThemeTim Testimonial Widget', 'themetim' ),
			array(
				'description' => __( 'Testimonial Widget', 'themetim' ),
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
					'label' => __( 'Title', 'themetim' ),
				),

				'testimonial' => array(
					'type'       => 'repeater',
					'label'      => __( 'Testimonial', 'themetim' ),
					'item_name'  => __( 'Item', 'themetim' ),
					'item_label' => array(
						'selector'     => "[id*='prefix-themetim-testimonial-']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'testimonial_name' => array(
							'type'  => 'text',
							'label' => __( 'Name', 'themetim' ),
						),
						'testimonial_texteditor' => array(
							'type' => 'tinymce',
							'label' => __( '', 'themetim' ),
							'default' => '',
							'rows' => 10,
							'default_editor' => 'html',
							'button_filters' => array(
								'mce_buttons' => array( $this, 'filter_mce_buttons' ),
								'mce_buttons_2' => array( $this, 'filter_mce_buttons_2' ),
								'mce_buttons_3' => array( $this, 'filter_mce_buttons_3' ),
								'mce_buttons_4' => array( $this, 'filter_mce_buttons_5' ),
								'quicktags_settings' => array( $this, 'filter_quicktags_settings' ),
							),
						),
						'testimonial_profile_picture' => array(
							'type'     => 'media',
							'library'  => 'image',
							'label'    => __( 'Image', 'themetim' ),
							'fallback' => true,
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

siteorigin_widget_register( 'themetim-testimonial-widget', __FILE__, 'Themetim_Testimonial_Widget' );
