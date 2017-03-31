<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div id="content" class="child-page">
	<div class="container hu">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-9">
				<div class="single-page">
					<h1 class="title-single"><?php the_title(); ?></h1>
					<div class="meta">
						<span>Ngày: <?php echo get_the_date('d - m - Y'); ?></span>
						<span>Bởi: <?php the_author(); ?></span>
					</div>
					<article class="post-content">
						<?php the_content(); ?>
					</article>
					<div class="social-share">
						<span class="like">
							<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
							<script src="https://apis.google.com/js/platform.js" async defer></script>
						  	<g:plusone size="medium"></g:plusone>
						</span>
						<span class="social-s">
							<a target="_blank" href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
							<a target="_blank" href="https://twitter.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						</span>
						<div class="clear"></div>
					</div>
					<div class="cmt">
						<div class="fb-comments" data-width="100%" data-href="<?php the_permalink(); ?>" data-numposts="3"></div>
					</div>
					<div class="lienquan">
						<div class="content-lq">
							<h3 class="titlq"><?php _e("Bài viết liên quan"); ?></h3>
							<?php foreach((get_the_category()) as $category) { 
								$cat_id = $category->cat_ID; }
								$args = array ( 'post_status' => 'publish',
												'category__in' => $cat_id,
												'post__not_in' => array($post->ID),
												'showposts' => 5,
												);
							?>
							<?php $related_post = new WP_query($args); ?>
							<?php if ( $related_post->have_posts()) : ?>
								<?php while ( $related_post->have_posts() ): ?>
								<?php $related_post->the_post(); ?>
										<div class="list-post">
											<a href="<?php the_permalink(); ?>"><?php show_thumb(370,257,1,'c'); ?></a>
											<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
											<div class="meta-l"><span><?php echo get_the_date('d - m - Y'); ?></span></div>
											<article class="post-content">
												<p><?php echo teaser(80); ?></p>
											</article>
											<div class="clear"></div>
										</div>
								<?php endwhile; else : ?>
							<?php endif; wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3">
				<div class="sidebar">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>