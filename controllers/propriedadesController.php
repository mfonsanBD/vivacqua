<?php
class propriedadesController extends admin{
	public function index(){
		$dados = array();
		$this->titulo = "Propriedades";
		$this->loadTemplate('propriedades', $dados);
	}
	public function novaPropriedade(){
		$dados = array();

		$this->titulo 						= "Nova Propriedade";

		$cidades 							= new Cidades();
		$caracteristicas 					= new Caracteristicas();

		$listaCidades 						= $cidades->listaCidades();
		$listaCaracteristicas 				= $caracteristicas->listaCaracteristicas();

		$dados['listaCidades'] 				= $listaCidades;
		$dados['listaCaracteristicas'] 		= $listaCaracteristicas;

		$this->loadTemplate('nova-propriedade', $dados);
	}
	public function ofertaEspecial(){
		$dados = array();
		$this->titulo = "Oferta Especial";
		$this->loadTemplate('oferta', $dados);
	}
}