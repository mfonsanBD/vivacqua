<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
	<meta name="description" content="Vivacqua Investimentos & Soluções Imobiliárias">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= NOME_DO_SITE ?> <?=$this->titulo;?></title>
    <link rel="shortcut icon" href="<?=URL_BASE?>assets/images/favicon.png" />
	
	<link rel="stylesheet" type="text/css" href="<?=URL_BASE?>assets/styles/bootstrap4/bootstrap.min.css">
	
	<link href="<?=URL_BASE?>assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<link rel="stylesheet" type="text/css" href="<?=URL_BASE?>assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?=URL_BASE?>assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?=URL_BASE?>assets/plugins/OwlCarousel2-2.2.1/animate.css">

	<link rel="stylesheet" type="text/css" href="<?=URL_BASE?>assets/plugins/rangeslider.js-2.3.0/rangeslider.css">

	<link rel="stylesheet" type="text/css" href="<?=URL_BASE?>assets/styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="<?=URL_BASE?>assets/styles/responsive.css">

	<link rel="stylesheet" type="text/css" href="<?=URL_BASE?>assets/styles/about.css">
	<link rel="stylesheet" type="text/css" href="<?=URL_BASE?>assets/styles/about_responsive.css">

	<link rel="stylesheet" type="text/css" href="<?=URL_BASE?>assets/styles/properties.css">
	<link rel="stylesheet" type="text/css" href="<?=URL_BASE?>assets/styles/properties_responsive.css">

	<link rel="stylesheet" type="text/css" href="<?=URL_BASE?>assets/styles/contact.css">
	<link rel="stylesheet" type="text/css" href="<?=URL_BASE?>assets/styles/contact_responsive.css">
</head>
<body>
<div class="super_container">
	<!-- Header -->
	<header class="header pt-2 pb-2">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo">
							<a href="<?=URL_BASE?>"><img src="<?=URL_BASE?>assets/images/logo-branca.png" alt="Logotipo Vivacqua"></a>
						</div>
						<nav class="main_nav">
							<ul>
								<li class="<?=($this->titulo == "Quem Somos") ? 'active' : ''?>">
									<a href="<?=URL_BASE?>quem-somos/">Quem Somos</a>
								</li>
								<li class="<?=($this->titulo == "Serviços") ? 'active' : ''?>">
									<a href="<?=URL_BASE?>nossos-servicos/">Serviços</a>
								</li>
								<li class="<?=($this->titulo == "Imóveis") ? 'active' : ''?>">
									<a href="<?=URL_BASE?>imoveis/">Imóveis</a>
								</li>
								<li class="<?=($this->titulo == "Notícias") ? 'active' : ''?>">
									<a href="<?=URL_BASE?>noticias/">Notícias</a>
								</li>
								<li class="<?=($this->titulo == "Contato") ? 'active' : ''?>">
									<a href="<?=URL_BASE?>contato/">Contato</a>
								</li>
							</ul>
						</nav>
							<div class="phone_num ml-auto">
								<div class="phone_num_inner">
									<a href="tel:22981107567">
										<img src="<?=URL_BASE?>assets/images/phone.png" alt="Telefone"><span>(22) 98110-7567</span>
									</a>
								</div>
							</div>
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->
	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<div class="logo menu_logo">
				<a href="<?=URL_BASE?>">
					<div class="logo_container d-flex flex-row align-items-start justify-content-start">
						<div class="logo_image"><div><img src="<?=URL_BASE?>assets/images/logo-branca.png" alt=""></div></div>
					</div>
				</a>
			</div>
			<ul>
				<li class="menu_item <?=($this->titulo == "Quem Somos") ? 'active' : ''?>">
					<a href="<?=URL_BASE?>quem-somos/">Quem Somos</a>
				</li>
				<li class="menu_item <?=($this->titulo == "Serviços") ? 'active' : ''?>">
					<a href="<?=URL_BASE?>servicos/">Serviços</a>
				</li>
				<li class="menu_item <?=($this->titulo == "Imóveis") ? 'active' : ''?>">
					<a href="<?=URL_BASE?>imoveis/">Imóveis</a>
				</li>
				<li class="menu_item <?=($this->titulo == "Notícias") ? 'active' : ''?>">
					<a href="<?=URL_BASE?>noticias/">Notícias</a>
				</li>
				<li class="menu_item <?=($this->titulo == "Contato") ? 'active' : ''?>">
					<a href="<?=URL_BASE?>contato/">Contato</a>
				</li>
			</ul>
		</div>
		<div class="menu_phone">
			<a href="tel:22981107567">
				<span>ligue: <span>(22) 98110-7567</span><span>
			</a>
		</div>
	</div>

	<?php
		$this->loadViewInTemplate($viewNome, $dados);
	?>

	<!-- Newsletter -->
	<div class="newsletter">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?=URL_BASE?>assets/images/newsletter.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_content d-flex flex-lg-row flex-column align-items-center justify-content-center">
						<div class="newsletter_title_container pt-2">
							<div class="newsletter_title">Ficou interessado?</div>
							<div class="newsletter_subtitle">Não deixe sua casa dos sonhos escapar.</div>
						</div>
						<div class="newsletter_form_container">
							<form action="#" class="newsletter_form">
								<input type="email" class="newsletter_input" placeholder="Deixe o seu melhor e-mail aqui" required="required">
								<button class="newsletter_button">Cadastre-se</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer class="footer">
		<div class="footer_main">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="footer_logo"><a href="<?=URL_BASE?>"><img src="<?=URL_BASE?>assets/images/logo-branca.png" width="250" alt=""></a></div>
					</div>
					<div class="col-lg-6 offset-lg-3 footer_col text-center">
						<div class="footer_about">
							<div class="footer_about_text">Donec in tempus leo. Aenean ultricies mauris sed quam lacinia lobortis. Cras ut vestibulum enim, in gravida nulla. Curab itur ornare nisl at sagittis cursus.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_bar_content d-flex flex-row align-items-center justify-content-center">
							<div class="cr">
								Copyright &copy; <script>document.write(new Date().getFullYear());</script> Vivacqua Investimentos & Soluções Imobiliárias. Todos os direitos reservados.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
<script src="<?=URL_BASE?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?=URL_BASE?>assets/styles/bootstrap4/popper.js"></script>
<script src="<?=URL_BASE?>assets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?=URL_BASE?>assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?=URL_BASE?>assets/plugins/easing/easing.js"></script>
<script src="<?=URL_BASE?>assets/plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?=URL_BASE?>assets/plugins/greensock/TweenMax.min.js"></script>
<script src="<?=URL_BASE?>assets/plugins/greensock/TimelineMax.min.js"></script>
<script src="<?=URL_BASE?>assets/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="<?=URL_BASE?>assets/plugins/greensock/animation.gsap.min.js"></script>
<script src="<?=URL_BASE?>assets/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="<?=URL_BASE?>assets/plugins/rangeslider.js-2.3.0/rangeslider.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>

<script src="<?=URL_BASE?>assets/js/custom.js"></script>
<script src="<?=URL_BASE?>assets/js/about.js"></script>
<script src="<?=URL_BASE?>assets/js/properties.js"></script>
<script src="<?=URL_BASE?>assets/js/contact.js"></script>
</body>
</html>