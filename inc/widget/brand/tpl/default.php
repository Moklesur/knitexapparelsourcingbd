<div class="themetim-brand brand <?php echo $instance['heading_alignment']; ?>">
	<div class="<?php echo $instance['heading_alignment']; ?>-heading margin-bottom-30">
		<?php if ( ! empty( $instance['title'] ) ) : ?>
			<h1 class="page-header"><?php echo esc_html( $instance['title'] ); ?></h1>
		<?php endif; ?>
	</div>
	<ul class="themetim-brand-list position-relative list-inline margin-bottom-0">
		<?php foreach( $instance['brand'] as $i => $brand ) : ?>
			<?php
			$profile_picture = $brand['profile_picture'];
			$profile_picture_fallback = $brand['profile_picture_fallback'];
			$image_details = siteorigin_widgets_get_attachment_image_src(
				$profile_picture,
				'thumbnail',
				$profile_picture_fallback
			);
			$url = $brand['button_url'];
			if ( ! empty( $url ) ) {
				$url = sow_esc_url( $brand['button_url'] );
			}else{
				$url = '#';
			}
			if ( ! empty( $image_details ) ) {
				echo '<li class="margin-top-10"><a href="'.$url.'" target="_blank"><img src="' . esc_url( $image_details[0] ) . '" class="img-responsive center-block" /></a></li>';
			}
			?>
		<?php endforeach; ?>
	</ul>
</div>
