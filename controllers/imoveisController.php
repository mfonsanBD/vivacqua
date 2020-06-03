<?php
class imoveisController extends controller{
	public function index(){
		$dados = array();

		$paginaAtual = $_SERVER['REQUEST_URI'];
		$paginaAtual = explode('/', $paginaAtual);
		
		$dados['pagina'] = '/'.$paginaAtual[2].'/';

		$this->titulo = "Imóveis";
		$this->loadTemplate('imoveis', $dados);
	}
}