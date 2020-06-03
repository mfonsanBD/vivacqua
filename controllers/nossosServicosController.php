<?php
class nossosServicosController extends controller{
	public function index(){
		$dados = array();
		$this->titulo = "Nossos Serviços";
		$this->loadTemplate('servicos', $dados);
	}
}