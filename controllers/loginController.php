<?php
class loginController extends admin{
	public function index(){
		$dados = array();
		$this->titulo = "Login";
		$this->loadTemplate('login', $dados);
	}
	public function sair(){
		unset($_SESSION['logado']);
		header("Location: ".URL_BASE."login/");
	}
}