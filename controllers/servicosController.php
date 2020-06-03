<?php
class servicosController extends admin{
	public function index(){
		$dados = array();
		$this->titulo = "Serviços";
		$this->loadTemplate('servicos', $dados);
	}
}