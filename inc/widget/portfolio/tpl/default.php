<div class="themetim-portfoilo <?php echo $instance['heading_alignment']; ?>">
	<div class="<?php echo $instance['heading_alignment']; ?>-heading margin-bottom-30">
		<?php if ( ! empty( $instance['title'] ) ) : ?>
			<h1 class="page-header"><?php echo esc_html( $instance['title'] ); ?></h1>
		<?php endif; ?>
	</div>
	<?php foreach( $instance['portfolio'] as $i => $portfolio ) : ?>
		<div class="themetim-portfolio-list  position-relative padding-null col-md-<?php echo esc_attr( $instance['per_row'] ); ?> col-sm-<?php echo esc_attr( $instance['per_row'] ); ?> col-xs-6">
			<?php
			$profile_picture = $portfolio['profile_picture'];
			$profile_picture_fallback = $portfolio['profile_picture_fallback'];
			$image_details = siteorigin_widgets_get_attachment_image_src(
				$profile_picture,
				'',
				$profile_picture_fallback
			);
			if ( ! empty( $image_details ) ) {
				echo '<a href="'.sow_esc_url( $portfolio['button_url'] ).'" class="portfolio-url"><img src="' . esc_url( $image_details[0] ) . '" class="img-responsive" /><span>'.$portfolio['menu_title'].'</span></a>';
			}
			?>
		</div>
	<?php endforeach; ?>
</div>
