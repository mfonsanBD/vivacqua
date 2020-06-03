<?php
class Cidades extends model{
	public function qtdCidades(){
		$array = array();
		$sql = $this->conexao->prepare("
			SELECT COUNT(*) as c 
			FROM cidade
		");
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array['c'];
	}
	public function listaCidades(){
		$array = array();
		$sql = $this->conexao->prepare("SELECT * FROM cidade");
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}
	public function addCidade($nomeCidade, $slugCidade){
		$sql = $this->conexao->prepare("
			INSERT INTO cidade 
			SET nomeCidade = ?,
			slugCidade = ?
		");
		$sql->execute(array($nomeCidade, $slugCidade));

		if ($sql->rowCount() > 0) {
			return true;
		}
		else{
			return false;
		}
	}
	public function verificaSlugCidade($slugCidade){
		$array = array();
		$sql = $this->conexao->prepare("
			SELECT * FROM cidade 
			WHERE slugCidade LIKE '".$slugCidade."%'
		");
		$sql->execute(array($slugCidade));
		
		return $sql->rowCount();
	}
	public function excluiCidade($idCidade){
		$sql = $this->conexao->prepare("
			DELETE FROM cidade 
			WHERE idCidade = ?
		");
		$sql->execute(array($idCidade));

		if ($sql->rowCount() > 0) {
			return true;
		}else{
			return false;
		}
	}
	public function verificaFoto($foto){
		$sql = $this->conexao->prepare("
			SELECT fotoCidade 
			FROM cidade 
			WHERE fotoCidade = ?
		");
		$sql->execute(array($foto));

		if($sql->rowCount() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function alteraFoto($foto, $id){
		$sql = $this->conexao->prepare("
			UPDATE cidade
			SET fotoCidade = ?
			WHERE idCidade = ?
		");
		$sql->execute(array($foto, $id));

		if($sql->rowCount() > 0){
			return true;
		}else{
			return false;
		}
	}
}