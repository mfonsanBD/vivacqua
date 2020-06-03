<?php
class corretoresController extends admin{
	public function index(){
		$dados = array();
		$this->titulo = "Corretores";
		$this->loadTemplate('corretores', $dados);
	}
}