<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-9">
				<div class="content-single">
					<h1><?php the_title(); ?></h1>
					<div class="meta">
						<span>Ngày: <?php echo get_the_date('d - m - Y'); ?></span>
					</div>					
					<div class="content-post">
						<div class="row">
							<div class="col-xs-12 col-sm-3 col-md-3">
								
									<!-- Get thumbnail -->
									<?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' =>'thumnail') ); ?>
									<!-- Get thumbnail -->	
							</div>
							<div class="col-xs-12 col-sm-3 col-md-9">
								<?php the_excerpt(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3">
				<div class="sidebar">
					
				</div>
			</div>
		</div>
	</div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>