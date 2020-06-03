<?php
class quemsomosController extends controller{
	public function index(){
		$dados = array();
		$this->titulo = "Quem Somos";
		$this->loadTemplate('quemsomos', $dados);
	}
}