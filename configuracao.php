<?php
require 'ambiente.php';

define("NOME_DO_SITE", 'Vivacqua Investimentos & Soluções Imobiliárias :: ');

$config = array();
if (AMBIENTE == 'desenvolvimento') {
	define("URL_BASE", 'http://localhost/vivacqua/');
	$config['banco'] 		= 'vivacqua';
	$config['host'] 		= 'localhost';
	$config['usuario'] 		= 'root';
	$config['senha'] 		= 'root';
}else{
	define("URL_BASE", 'https://vivacquainvest.com.br');
}

global $conexao;

try {
	$conexao = new PDO("mysql:dbname=".$config['banco']."; host=".$config['host']."; charset=utf8", $config['usuario'], $config['senha']);
} catch (PDOException $e) {
	echo "Falha na conexão: ".$e->getMessage();
}