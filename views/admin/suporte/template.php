<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
	<meta name="description" content="Vivacqua Investimentos & Soluções Imobiliárias">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= NOME_DO_SITE ?> <?=$this->titulo;?></title>
  	
	<link rel="stylesheet" href="<?=URL_BASE?>assets/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
	<link rel="stylesheet" type="text/css" href="<?=URL_BASE?>assets/styles/bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" href="<?=URL_BASE?>assets/admin/vendors/css/vendor.bundle.base.css">
	<link rel="stylesheet" href="<?=URL_BASE?>assets/admin/vendors/css/vendor.bundle.addons.css">
  	<link rel="stylesheet" href="<?=URL_BASE?>assets/admin/vendors/iconfonts/font-awesome/css/font-awesome.css">
  	<link rel="stylesheet" href="<?=URL_BASE?>assets/admin/vendors/icheck/skins/all.css">
	<link rel="stylesheet" href="<?=URL_BASE?>assets/admin/css/style.css">

	<link rel="stylesheet" type="text/css" href="<?=URL_BASE?>assets/styles/properties.css">
	<link rel="stylesheet" type="text/css" href="<?=URL_BASE?>assets/styles/properties_responsive.css">

	<link rel="stylesheet" type="text/css" href="<?=URL_BASE?>assets/admin/css/croppie.css">
	<link rel="stylesheet" type="text/css" href="<?=URL_BASE?>assets/admin/css/news.css">

	<link rel="shortcut icon" href="<?=URL_BASE?>assets/images/favicon.png" />
</head>
<body>
	<div class="container-scroller">
		<?php
			$this->loadViewInTemplate($viewNome, $dados);
		?>
	</div>

  	<script src="<?=URL_BASE?>assets/admin/js/jquery.min.js"></script>
  	<script src="<?=URL_BASE?>assets/admin/js/croppie.js"></script>
	<script src="<?=URL_BASE?>assets/styles/bootstrap4/popper.js"></script>
	<script src="<?=URL_BASE?>assets/styles/bootstrap4/bootstrap.min.js"></script>
  	<script src="<?=URL_BASE?>assets/admin/js/jquery.mask.min.js"></script>
  	<script src="<?=URL_BASE?>assets/admin/js/sweetalert.min.js"></script>
	<script src="<?=URL_BASE?>assets/admin/js/off-canvas.js"></script>
	<script src="<?=URL_BASE?>assets/admin/js/misc.js"></script>
	<script src="<?=URL_BASE?>assets/admin/js/dashboard.js"></script>
  	<script src="<?=URL_BASE?>assets/admin/js/chart.js"></script>
  	<script src="<?=URL_BASE?>assets/admin/js/paginas/caracteristicas.js"></script>
  	<script src="<?=URL_BASE?>assets/admin/js/paginas/cidades.js"></script>
</body>
</html>