<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700,500&subset=latin,vietnamese,latin-ext">
		<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/libs/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/libs/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/libs/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/libs/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/css/main.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-3">
						<div class="logo">
							<a href="#"><img src="<?php bloginfo("template_directory"); ?>/images/logo.png" alt="Da na Food"></a>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="main-banner">
							<div class="top-title">
								<h1><a href="#" title="">Công ty thực phẩm DaNang Food</a></h1>
							</div>
							<div class="phone-top">
								<p> <i class="fa fa-phone"></i> 0905 999 888 - 0511 222 333</p>
							</div>
							<div class="mail-top">
								<span class="mail-l"><i class="fa fa-envelope-o"></i> admin@gmail.com</span>
								<span class="mail-f"><i class="fa fa-envelope-o"></i> manager@gmail.com</span>
								<div class="clear"></div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-3">
						<div class="lang">
							<div id="google_translate_element"></div>
							<script type="text/javascript">
								function googleTranslateElementInit() {
								  new google.translate.TranslateElement({pageLanguage: 'vi', includedLanguages: 'en,vi', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false, multilanguagePage: true}, 'google_translate_element');
								}
							</script>
							<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
							        
						</div>
						<div class="form-search">
							<form action="/" method="GET" role="form">
								<input type="text" class="form-control" placeholder="Tìm kiếm...">
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<nav class="main-nav">
				<div class="container">
					<?php wp_nav_menu( array( 'theme_location' => 'main_nav', 'container' => 'false', 'menu_id' => 'main-nav', 'menu_class' => 'top-menu') ); ?>
					<div class="cear"></div>
				</div>
			</nav>
		</header><!-- /header -->