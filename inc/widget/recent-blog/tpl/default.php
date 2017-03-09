<div class="themetim-recent-blog <?php echo $instance['heading_alignment']; ?>">
	<?php if ( ! empty( $instance['title'] ) ) : ?>
		<div class="<?php echo $instance['heading_alignment']; ?>-heading margin-bottom-30">
			<?php if ( ! empty( $instance['title'] ) ) : ?>
				<h1 class="page-header"><?php echo esc_html( $instance['title'] ); ?></h1>
			<?php endif; ?>
		</div>
	<?php endif;
	$recent_post_limit = $instance['post_limit'];
	$query_latest_blog = new WP_Query( array(
		'post_status'         => 'publish',
		'posts_per_page'	  => $recent_post_limit
	) );
	?>
	<div class="recent-blog-post-widget">
		<?php
		if ($query_latest_blog->have_posts()) :
			while ( $query_latest_blog->have_posts() ) : $query_latest_blog->the_post(); ?>
				<div class="col-md-4 col-sm-6 col-xs-12 margin-top-30">
					<?php the_title( sprintf( '<h4 class="entry-title text-capitalize margin-null"><a href="%s">', esc_url( get_permalink() ) ), '</a></h4>' );
					if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta margin-bottom-20 margin-top-10">
							<?php themetim_posted_on(); ?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="entry-thumb">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-responsive margin-top-20 margin-bottom-20" alt="" />
							</a>
						</div>
					<?php endif; ?>
					<div class="entry-summary"><?php the_excerpt(); ?></div>
					<?php if(!is_single()) : ?>
						<div class="pull-left margin-top-10">
							<a href="<?php the_permalink(); ?>" class="btn btn-default">Read More</a>
						</div>
					<?php endif;  ?>
					<div class="pull-right margin-top-10">
						<?php themetim_social_sharing(); ?>
					</div>
				</div>
			<?php endwhile;
			wp_reset_postdata();
		endif;
		?>
	</div>
</div>