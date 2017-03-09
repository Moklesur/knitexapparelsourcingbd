<div class="themetim-service service-fix <?php echo $instance['heading_alignment']; ?>">
	<?php if ( ! empty( $instance['icon'] ) ) :
		$icon_styles = array();
		if(!empty($instance['icon_size'])) $icon_styles[] = 'font-size: '.intval($instance['icon_size']).'px';
		if(!empty($instance['icon_color'])) $icon_styles[] = 'color: '.$instance['icon_color'];
		echo  siteorigin_widget_get_icon( $instance['icon'], $icon_styles );
	endif; ?>
	<div class="<?php echo $instance['heading_alignment']; ?>-heading margin-bottom-30 margin-top-20 service-heading">
		<?php if ( ! empty( $instance['title'] ) ) : ?>
			<h1 class="page-header"><?php echo esc_html( $instance['title'] ); ?></h1>
		<?php endif; ?>
	</div>
	<?php if ( ! empty( $instance['texteditor'] ) ) : ?>
		<div class="services-details"><?php echo  $instance['texteditor']; ?></div>
	<?php endif; ?>
</div>