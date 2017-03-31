<?php get_header(); ?>
		<section>
			<?php get_template_part('slider'); ?>
			<div class="main-content">
				<div class="container">
					<div class="listproduct">
						<span class="next-fl"><i class="fa fa-angle-right"></i></span>
						<span class="prev-fl"><i class="fa fa-angle-left"></i></span>
						<div class="owl-carousel owl-theme" id="owl-carousel">
							<?php $args = array( 
							    'hide_empty' => 0,
							    'taxonomy' => 'product_cat',
							    'parent' => 0
							    ); 
							    $cates = get_categories( $args ); 
							    foreach ( $cates as $cate ) {  ?>
							    <?php 
							    	$thumbnail_id = get_woocommerce_term_meta( $cate->term_id, 'thumbnail_id', true );
	    							$image = wp_get_attachment_url( $thumbnail_id )
							    ?>
									<div class="item">
								    	<div class="box-cat">
											<img src="<?php echo $image; ?>" alt="<?php echo $cate->name; ?>">
											<div class="detail-post">
												<div>
													<h4><a href="<?php echo get_term_link($cate->slug, 'product_cat'); ?>"><?php echo $cate->name; ?></a></h4>
													<p><a href="<?php echo get_term_link($cate->slug, 'product_cat'); ?>" class="read-more">Chi tiết</a></p>
												</div>
											</div>
										</div>
									</div>
							<?php } ?>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6">
							<div class="event">
								<h2 class="title-post">SỰ KIỆN</h2>
								<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=1&cat=1'); ?>
								<?php global $wp_query; $wp_query->in_the_loop = true; ?>
								<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
									<div class="images-post">
										<a href="<?php the_permalink(); ?>"><?php show_thumb(300,200,1,'c'); ?></a>
									</div>
									<div class="info-food">
										<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
										<p><?php echo teaser(20); ?></p>
										<a href="<?php the_permalink(); ?>" class="more">Xem thêm</a>
									</div>
								<?php endwhile; wp_reset_postdata(); ?>
								<div class="clear"></div>
								<div class="list-post">
									<ul>
										<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=3&cat=1&offset=1'); ?>
										<?php global $wp_query; $wp_query->in_the_loop = true; ?>
										<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
											<li><a href="<?php the_permalink(); ?>"><i class="fa fa-angle-double-right"></i> <?php the_title(); ?></a></li>
										<?php endwhile; wp_reset_postdata(); ?>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-6">
							<div class="hight-product">
								<h2 class="title-post">Sản phẩm nổi bật</h2>
								<div class="list-product">
									<span class="next-lf"><i class="fa fa-angle-right"></i></span>
									<span class="prev-lf"><i class="fa fa-angle-left"></i></span>
									<div class="owl-carousel owl-theme" id="owl-carousel2">
									<?php $args = array( 'post_type' => 'product','posts_per_page' => 10, 'meta_key' => '_featured','meta_value' => 'yes',); ?>
							        <?php $getposts = new WP_query( $args);?>
							        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
							        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
							        <?php global $product; ?>
										<div class="item">
									    	<div class="detail-list-post">
												<a href="<?php the_permalink(); ?>"><?php show_thumb(400,500,1,'c'); ?></a>
												<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
											</div>
										</div>
									<?php endwhile; wp_reset_postdata(); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="like-product">
						<h2 class="title-post">
							SẢN PHẨM YÊU THÍCH
						</h2>
						<div class="row">
							<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=3&post_type=product'); ?>
							<?php global $wp_query; $wp_query->in_the_loop = true; ?>
							<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
								<div class="col-xs-12 col-sm-12 col-md-4">
									<div class="block-img">
										<a href="<?php the_permalink(); ?>"><?php show_thumb(600,400,1,'c'); ?></a>
										<div class="info-block-img">
											<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
											<p><?php echo teaser(8); ?></p>
										</div>
									</div>
								</div>
							<?php endwhile; wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
<?php get_footer(); ?>