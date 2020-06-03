<?php
class contatoController extends controller{
	public function index(){
		$dados = array();
		$this->titulo = "Contato";
		$this->loadTemplate('contato', $dados);
	}
}