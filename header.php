<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?><?php the_title(' - '); ?><?php the_field('title_seo') ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta proerty="og:title" content="<?php bloginfo('name'); ?>"/>
	<meta proerty="og:description" content="<?php the_field('descricao_seo') ?>"/>
	<meta property="og:url" content="<?php bloginfo( 'url' ); ?>">
	<meta property= "og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/img/og-image.png"/>
	<link rel="shortcut icon" href="<?php get_template_directory_uri(); ?>favicon.ico">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700" rel="stylesheet">
	<script src="https://use.fontawesome.com/8445eff0c0.js"></script>

	<!-- header wp -->
	<?php wp_head(); ?>
	<!-- header wp -->

</head>
<body>

	<!-- adiciona classe "js" para verificar sem tem javascript ativo -->
	<script type="text/javascript">
		document.documentElement.className += ' js';
	</script>

	<!-- superhead -->
	<div class="superhead-bg">
		<div class="superhead">
			<a href="tel:+5561981228365">+55 (61) 98122-8365</a>
			<a href="https://www.facebook.com/Pulu-Cakes-1673784609531426/"><i class="icone fa fa-facebook" target="_blank"></i></a>
			<a href="https://www.instagram.com/pulucakes/" target="_blank"><i class="icone fa fa-instagram"></i></a>
			<a href="https://api.whatsapp.com/send?phone=5561981228365&text=Oi Airla, vim através do seu site." target="_blank"><i class="icone fa fa-whatsapp"></i></a>
			<p>Seg a Sáb das 8:00 às 16:00</p>
		</div>
	</div>

	<!-- menu -->
	<header class="menu-bg">
		<div class="menu">
			<div>
				<a href="#" class="logo-stick">Pulu cakes</a>
				<a href="#"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.svg" class="logo-primary"></a>
			</div>
			<nav class="menu-nav">
				<ul>
					<li><a href="#home">Home</a></li>
					<li><a href="#sobre">Sobre</a></li>
					<li><a href="#fotos">Fotos</a></li>
					<li><a href="#precos">Preços</a></li>
					<li><a href="#contato">Contato</a></li>
				</ul>
			</nav>
		</div>
	</header>