<?php
/**
 * Portfolio widget.
 *
 * @package themetim
 */

class Themetim_Portfolio_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'themetim-portfolio-widget',
			__( 'ThemeTim Portfolio Widget', 'themetim' ),
			array(
				'description' => __( 'Displays Portfolio Widget', 'themetim' ),
			),
			array(),
			array(
				'title' => array(
					'type'  => 'text',
					'label' => __( 'Title', 'themetim' ),
				),
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
				'portfolio' => array(
					'type'       => 'repeater',
					'label'      => __( 'Portfolio', 'themetim' ),
					'item_name'  => __( 'Item', 'themetim' ),
					'item_label' => array(
						'selector'     => "[id*='prefix-themetim-portfolio-']",
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
						'menu_title' => array(
							'type'  => 'text',
							'label' => __( 'Title', 'themetim' ),
						),
						'button_url' => array(
							'type' => 'link',
							'label' => __('Button URL', 'themetim'),
							'default' => ''
						),
					),
				),
				'per_row' => array(
					'type'    => 'select',
					'label'   => __( 'Menus per row', 'themetim' ),
					'default' => 4,
					'options' => array(
						'12' => 1,
						'6' => 2,
						'4' => 3,
						'3' => 4,
					),
				),
			)
		);
	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'themetim-portfolio-widget', __FILE__, 'Themetim_Portfolio_Widget' );
