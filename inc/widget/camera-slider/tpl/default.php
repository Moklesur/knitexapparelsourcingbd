<div class="themetim-camera-slider-widget camera-slider">
	<div class="themetim-camera-slider">
		<?php foreach( $instance['CameraSlider'] as $i => $CameraSlider ) :

			if ( ! empty( $CameraSlider['CameraSlider_button_text'] ) ) :
				$button = '<div class="slider-button"><a href="'.sow_esc_url($CameraSlider['CameraSlider_button_url']).'" class="btn '.$CameraSlider['CameraSlider_button_style'].'">'.$CameraSlider['CameraSlider_button_text'].'</a></div>';
			endif;

			$CameraSlider_image = $CameraSlider['CameraSlider_image'];
			$CameraSlider_image_fallback = $CameraSlider['profile_picture_fallback'];
			$image_url = siteorigin_widgets_get_attachment_image_src(
				$CameraSlider_image, '', $CameraSlider_image_fallback
			);
			if ( ! empty( $image_url ) ) {
				$image_url = esc_url( $image_url[0] );
			}

			$CameraSlider_title_color = '';
			if(!empty($CameraSlider['CameraSlider_title_color'])) $CameraSlider_title_color = 'color: '.($CameraSlider['CameraSlider_title_color']);

			$CameraSlider_subtitle_color = '';
			if(!empty($CameraSlider['CameraSlider_subtitle_color'])) $CameraSlider_subtitle_color = 'color: '.($CameraSlider['CameraSlider_subtitle_color']);

			$text_position = '';
			if(!empty($CameraSlider['text_position'])) $text_position = $CameraSlider['text_position'];

			echo '<div  data-src="'. $image_url .'" class="fffffffffffff"><div class="camera-slider-inner '.$CameraSlider['heading_alignment'].'" style="margin:'.$text_position.'"><h1 style="'.$CameraSlider_title_color.'">'.$CameraSlider['CameraSlider_title'].'</h1><h3 style="'.$CameraSlider_subtitle_color.'">'.$CameraSlider['CameraSlider_subtitle'].'</h3><div class="slider-details">'.$CameraSlider['CameraSlider_texteditor'].'</div>'.$button.'</div></div>';

		endforeach; ?>
	</div>
</div>
<script>
	jQuery(function(){
		if (jQuery('.themetim-camera-slider').length) {
			jQuery('.themetim-camera-slider').camera({
				height: '50%',
				loader: 'bar',
				margin:'',
				alignment: 'center',
				barPosition: 'top',
				thumbnails: false,
				playPause: false,
				loaderColor: '#fff',
				loaderBgColor: '#b49132',
				hover: true,
				opacityOnGrid: true,
				pagination: false
			});
		}
	});
</script>