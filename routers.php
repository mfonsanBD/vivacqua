<?php
global $routers;
$routers = array();

$routers['/quem-somos/'] 			= '/quemsomos/index/';

$routers['/sair/'] 					= '/login/sair';

$routers['/nova-propriedade/'] 		= '/propriedades/novaPropriedade/';
$routers['/oferta-especial/'] 		= '/propriedades/ofertaEspecial/';

$routers['/postagens/'] 			= '/blog/index/';
$routers['/nova-postagem/'] 		= '/blog/novaPostagem/';

$routers['/nossos-servicos/'] 		= '/nossosServicos/index/';