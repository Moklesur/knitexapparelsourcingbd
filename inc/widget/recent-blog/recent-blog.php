<?php
/**
 * Themetim Recent Blog Widget.
 *
 * @package themetim
 */

class Themetim_Recent_Blog_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'themetim-recent-blog-widget',
			__( 'ThemeTim Recent Blog Widget', 'themetim' ),
			array(
				'description' => __( 'ThemeTim Recent Blog', 'themetim' ),
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
				'title' => array(
					'type'  => 'text',
					'label' => __( 'Heading', 'themetim' ),
				),
				'post_limit' => array(
					'type' => 'number',
					'label' => __( 'Post Limit', 'themetim' ),
                    'default' => '3'
				),
			)

		);
	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'themetim-recent-blog-widget', __FILE__, 'Themetim_Recent_Blog_Widget' );
