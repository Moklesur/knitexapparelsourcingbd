<div class="themetim-fact-widget fact-list padding-gap-1 padding-gap-2 <?php echo $instance['heading_alignment']; ?>">
	<?php if ( ! empty( $instance['title'] ) ) : ?>
		<div class="<?php echo $instance['heading_alignment']; ?>-heading margin-bottom-30">
			<h1 class="page-header"><?php echo esc_html( $instance['title'] ); ?></h1>
		</div>
	<?php endif; ?>
	<ul class="themetim-fact-list position-relative list-inline">
		<?php foreach( $instance['fact'] as $i => $fact ) :
			echo '<li><h1>'.$fact['menu_title'].'</h1><p>'.$fact['texteditor'].'</p></li>';
		endforeach; ?>
	</ul>
</div>
