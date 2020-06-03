<?php
class Caracteristicas extends model{
	public function qtdCaracteristicas(){
		$array = array();
		$sql = $this->conexao->prepare("
			SELECT COUNT(*) as c 
			FROM caracteristicas
		");
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetch();
		}

		return $array['c'];
	}
	public function listaCaracteristicas(){
		$array = array();
		$sql = $this->conexao->prepare("SELECT * FROM caracteristicas");
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}
	public function addCaracteristica($nomeCaracteristicas){
		$sql = $this->conexao->prepare("
			INSERT INTO caracteristicas 
			SET nomeCaracteristicas = ?
		");
		$sql->execute(array($nomeCaracteristicas));

		if ($sql->rowCount() > 0) {
			return true;
		}
		else{
			return false;
		}
	}
	public function excluiCaracteristica($idCaracteristica){
		$sql = $this->conexao->prepare("
			DELETE FROM caracteristicas 
			WHERE idCaracteristicas = ?
		");
		$sql->execute(array($idCaracteristica));

		if ($sql->rowCount() > 0) {
			return true;
		}else{
			return false;
		}
	}
}