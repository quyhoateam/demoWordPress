<?php get_header(); ?>
<?php 
	$queried_object = get_queried_object();
  	$term_id = $queried_object->term_id;
?>
<div id="content">
	<div class="container hu">
		<div class="content row">
			<div class="col-md-3 col-sm-4 content-left">
				<?php get_sidebar(); ?>
			</div> <!-- end content-left -->
			<div class="col-md-9 col-sm-8 content-right">
				<h1 class="title"><?php single_cat_title(); ?></h1>
				<?php $args = array( 
				    'hide_empty' => 0,
				    'taxonomy' => 'product_cat',
				    'parent' => 0
				    ); 
				    $cates = get_categories( $args ); 
				    foreach ( $cates as $cate ) {  ?>
				    <?php if(product_check_cat($cate->slug,$queried_object->slug)){ ?>
						<?php product_by_cat($cate->slug,$queried_object->slug,$cate->name); ?>
					<?php } ?>
				<?php } ?>
			</div> <!-- end content-right -->
		</div> <!-- end content -->
	</div>
</div> <!-- end content -->
<?php get_footer(); ?>