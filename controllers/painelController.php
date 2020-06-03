<?php
class painelController extends admin{
	public function index(){
		$dados = array();
		$this->titulo = "Painel de Controle";
		$this->loadTemplate('painel', $dados);
	}
}