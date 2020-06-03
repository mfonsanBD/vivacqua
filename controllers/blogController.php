<?php
class blogController extends admin{
	public function index(){
		$dados = array();
		$this->titulo = "Postagens";
		$this->loadTemplate('postagens', $dados);
	}
	public function novaPostagem(){
		$dados = array();
		$this->titulo = "Nova Postagem";
		$this->loadTemplate('nova-postagem', $dados);
	}
}