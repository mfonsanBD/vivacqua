<?php
class admin{
	public function loadView($viewNome, $dados = array()){
		extract($dados);
		require 'views/admin/'.$viewNome.'.php';
	}
	public function loadTemplate($viewNome, $dados = array()){
		require 'views/admin/suporte/template.php';
	}
	public function loadViewInTemplate($viewNome, $dados = array()){
		extract($dados);
		require 'views/admin/'.$viewNome.'.php';
	}
}