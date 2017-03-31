		<?php global $hk_options; ?>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-8">
						<div class="info-company">
							<h2 class="title">CÔNG TY TNHH MTV DANANG FOOD</h2>
							<div class="info-footer-top">
								<p>Cung cấp nguyên liệu cho các : Nhà Hàng | Khách Sạn | Siêu Thị | FoodShop... và các Cơ Sở Sản Xuất bánh kẹo, kem, caramen…</p>
							</div>
							<div class="info-contact">
								<p><span><i class="fa fa-angle-double-right"></i> Trụ sở: </span>345 Tôn Đức Thắng - Liên Chiểu - Đà Nẵng</p>
								<p><span><i class="fa fa-angle-double-right"></i> Số điện thoại: </span>05113 333 444</p>
								<p><span><i class="fa fa-angle-double-right"></i> Di động: </span>0905 000 222</p>
								<p><span><i class="fa fa-angle-double-right"></i> Email: </span>danangfood@gmail.com</p>
								<p><span><i class="fa fa-angle-double-right"></i> Websit: </span>danangfood.net</p>
							</div>
							<div class="social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-youtube"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-4">
						<div class="facebook">
							<h2 class="title">Facebook</h2>

							<div class="fb-page" data-href="<?php echo $hk_options[fb]; ?>" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyr">
				Bản quyền thuộc về DANANG FOOD @ 2017 _ Phát triển bởi www.HUYKIRA.com
			</div>
		</footer>
		<script src="<?php bloginfo("template_directory"); ?>/js/jquery-3.2.0.min.js"></script>
		<script src="<?php bloginfo("template_directory"); ?>/libs/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php bloginfo("template_directory"); ?>/libs/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?php bloginfo("template_directory"); ?>/js/custom.js"></script>
		<?php wp_footer(); ?>
		<div id="fb-root"></div>
		<script>
		(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7&appId=750688268378229";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script>
	</body>
</html>