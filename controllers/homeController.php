<?php
class homeController extends controller{
	public function index(){
		$dados = array();
		
		$this->titulo = "Página Inicial";

		$cidades = new Cidades();
		$listaCidades 	= $cidades->listaCidades();
		
		$dados['listaCidades'] 	= $listaCidades;
		
		$this->loadTemplate('home', $dados);
	}
}