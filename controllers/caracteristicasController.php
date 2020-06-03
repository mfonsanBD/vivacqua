<?php
class caracteristicasController extends admin{
	public function index(){
		$dados = array();

		$this->titulo = "Características";

		$caracteristicas = new Caracteristicas;
		$qtdCaracteristicas 	= $caracteristicas->qtdCaracteristicas();
		$listaCaracteristicas 	= $caracteristicas->listaCaracteristicas();

		$dados['qtdCaracteristicas'] 	= $qtdCaracteristicas;
		$dados['listaCaracteristicas'] 	= $listaCaracteristicas;

		$this->loadTemplate('caracteristicas', $dados);
	}
	public function addCaracteristica(){
		$caracteristicas = new Caracteristicas;
		if (isset($_POST) && !empty($_POST)) {
			$nomeCaracteristica = addslashes($_POST['nome']);
			if ($caracteristicas->addCaracteristica($nomeCaracteristica)){
				echo 1;
			}
			else{
				echo 0;
			}
		}
	}
	public function excluiCaracteristica(){
		$caracteristicas = new Caracteristicas;
		if (isset($_POST) && !empty($_POST)) {
			$idCaracteristica = $_POST['id'];
			if ($caracteristicas->excluiCaracteristica($idCaracteristica)) {
				echo 1;
			}else{
				echo 0;
			}
		}
	}
}