<?php
class comentariosController extends admin{
	public function index(){
		$dados = array();
		$this->titulo = "Comentários";
		$this->loadTemplate('comentarios', $dados);
	}
}