<?php
class cidadesController extends admin{
	public function index(){
		$dados = array();
		
		$this->titulo = "Cidades";

		$cidades = new Cidades();
		$qtdCidades 	= $cidades->qtdCidades();
		$listaCidades 	= $cidades->listaCidades();

		$dados['qtdCidades'] 	= $qtdCidades;
		$dados['listaCidades'] 	= $listaCidades;

		$this->loadTemplate('cidades', $dados);
	}
	public function verificaSlugCidade(){
		if (isset($_POST) && !empty($_POST)) {
			$slugCidade = addslashes($_POST['slug']);

			$cidades = new Cidades();
			
			$slug = $cidades->verificaSlugCidade($slugCidade);
			echo $slug;
		}
	}
	public function addCidade(){
		$cidades = new Cidades();
		if (isset($_POST) && !empty($_POST)) {
			$nomeCidade = addslashes($_POST['nome']);
			$slugCidade = addslashes($_POST['slug']);

			if ($cidades->addCidade($nomeCidade, $slugCidade)){
				echo 1;
			}
			else{
				echo 0;
			}
		}
	}
	public function excluiCidade(){
		$cidades = new Cidades();
		if (isset($_POST) && !empty($_POST)) {
			$idCidade = $_POST['id'];

			$pasta = getcwd().'/assets/images/cidade/';
			$pasta = str_replace('\\', '/', $pasta);
			$pasta .= $idCidade;

			unlink($pasta.'/'.md5($idCidade).'.jpg');
			rmdir($pasta);
			
			if ($cidades->excluiCidade($idCidade)) {
				echo 1;
			}else{
				echo 0;
			}
		}
	}
	public function alteraImagem(){
		if(isset($_POST['foto']) && !empty($_POST['foto'])){
			$id 	= $_POST['id'];
			$foto 	= $_POST['foto'];

			$array1 = explode(";", $foto);
			$array2 = explode(",", $array1[1]);

			$permitidos = array('data:image/jpeg', 'data:image/png', 'data:image/jpg');

			if (in_array($array1[0], $permitidos)) {
				$dados = base64_decode($array2[1]);
				$nome_da_foto = md5($id).'.jpg';

				if(is_dir('assets/images/cidade/'.$id.'/')){
					file_put_contents('assets/images/cidade/'.$id.'/'.$nome_da_foto, $dados);
				}else{
					mkdir('assets/images/cidade/'.$id.'/');
					file_put_contents('assets/images/cidade/'.$id.'/'.$nome_da_foto, $dados);
				}
				
				$cidades = new Cidades();
				
				if($cidades->verificaFoto($nome_da_foto)){
					echo "2";
				}else{
					if($cidades->alteraFoto($nome_da_foto, $id)){
						echo "1";
					}else{
						echo "0";
					}
				}
			}
		}
	}
}