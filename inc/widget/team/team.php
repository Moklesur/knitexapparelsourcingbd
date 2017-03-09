<?php
/**
 * Team widget.
 *
 * @package themetim
 */

class Themetim_Team_Widget extends SiteOrigin_Widget {

	function __construct() {

		parent::__construct(
			'themetim-team-widget',
			__( 'ThemeTim Team Widget', 'themetim' ),
			array(
				'description' => __( 'Team Widget', 'themetim' ),
			),
			array(),
			array(
				'title' => array(
					'type'  => 'text',
					'label' => __( 'Title', 'themetim' ),
				),
				'sub_title' => array(
					'type' => 'text',
					'label' => __( 'Sub Title', 'themetim' ),
				),
				'team' => array(
					'type'       => 'repeater',
					'label'      => __( 'Team', 'themetim' ),
					'item_name'  => __( 'Item', 'themetim' ),
					'item_label' => array(
						'selector'     => "[id*='prefix-themetim-team-']",
						'update_event' => 'change',
						'value_method' => 'val',
					),
					'fields' => array(
						'team_title' => array(
							'type'  => 'text',
							'label' => __( 'Title', 'themetim' ),
						),
						'team_price' => array(
							'type'  => 'text',
							'label' => __( 'Team', 'themetim' ),
						),
						'texteditor' => array(
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
						'profile_picture' => array(
							'type'     => 'media',
							'library'  => 'image',
							'label'    => __( 'Image', 'themetim' ),
							'fallback' => true,
						),
					),
				),
				'per_row' => array(
					'type'    => 'select',
					'label'   => __( 'Menus per row', 'themetim' ),
					'default' => 3,
					'options' => array(
						'12' => 1,
						'6' => 2,
						'3' => 4,
						'4' => 3,
					),
				),
			)
		);
	}

	function get_template_name( $instance ) {
		return 'default';
	}
}

siteorigin_widget_register( 'themetim-team-widget', __FILE__, 'Themetim_Team_Widget' );
