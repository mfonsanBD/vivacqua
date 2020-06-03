<?php require 'suporte/header.php'; ?>
<div class="container-fluid page-body-wrapper">
	<?php require 'suporte/navsidebar.php'; ?>
	<div class="main-panel">
        <div class="content-wrapper">
        	<h3 class="text-center mb-4"><?=$this->titulo;?></h3>
			<div id="resultado"></div>

	        <div class="row">
	            <div class="col-md-6 offset-md-3 d-flex align-items-stretch grid-margin">
	              <div class="row flex-grow">
	                <div class="col-12">
	                  <div class="card">
	                    <div class="card-body">
	                      <h4 class="card-title">Adicionar nova Cidade</h4>
	                      <form class="forms-sample" id="addCidades">
	                        <div class="form-group">
	                          <label for="nomeCidade">Nome <i class="fa fa-asterisk asterisco text-danger"></i></label>
	                          <input type="text" class="form-control" id="nomeCidade" placeholder="Ex: Cabo Frio, Armação dos Búzios, etc...">
	                        </div>
	                        <button type="submit" class="btn btn-success mr-2 mt-4">Adicionar</button>
	                      </form>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>
	            <div class="col-md-12 grid-margin stretch-card">
	              <div class="card">
	                <div class="card-body">
	                	<h4 class="card-title">Cidades Cadastradas</h4>
		                  <div class="table-responsive">
		                    <table class="table table-striped">
		                      <thead>
		                        <tr>
		                          <th>
		                            Imagem
		                          </th>
		                          <th>
		                            Cidade
		                          </th>
		                          <th>
		                            #
		                          </th>
		                        </tr>
		                      </thead>
		                      <tbody>
		                      	<?php
		                      		if ($qtdCidades != 0){
		                      			foreach ($listaCidades as $cidade) :
		                      	?>
					                        <tr>
					                          <td class="py-1">
					                          	<?php
					                          		if ($cidade['fotoCidade'] == 'padrao.jpg'){
					                          	?>
					                            	<img src="<?=URL_BASE?>assets/images/<?=$cidade['fotoCidade']?>" class="img_cidade" alt="<?=$cidade['nomeCidade']?>">
					                          	<?php
					                          		}else{
					                          	?>
													<img src="<?=URL_BASE?>assets/images/cidade/<?=$cidade['idCidade']?>/<?=$cidade['fotoCidade']?>" class="img_cidade" alt="<?=$cidade['nomeCidade']?>">
					                          	<?php
					                          		}
					                          	?>
					                          </td>
					                          <td class="py-1">
					                            <?=$cidade['nomeCidade']?>
					                          </td>
					                          <td >
				              					<button type="button" data-toggle="modal" data-target="#modalExCidade" data-id="<?= $cidade['idCidade']; ?>" data-nome="<?= $cidade['nomeCidade'];?>" class="btn btn-danger btn-sm">Excluir</button>

				              					<button type="button" data-toggle="modal" data-target="#modalEdCidade" data-id="<?= $cidade['idCidade']; ?>" data-nome="<?= $cidade['nomeCidade'];?>" class="btn bg-padrao btn-sm">Adicionar Imagem</button>
					                          </td>
					                        </tr>
		                        <?php
		                        		endforeach;
		                        	}else{
		                        ?>
		                        		<tr>
		                        			<td colspan="3">
			                        			<div class="col-md-12 text-center">
			                        				Nenhuma cidade cadastrada até o momento.
			                        			</div>
		                        			</td>
	                        			</tr>
		                        <?php
		                        	}
		                        ?>
		                      </tbody>
		                    </table>
		                  </div>
	                </div>
	              </div>
	            </div>
	        </div>
        </div>
        <?php require 'suporte/footer.php'; ?>
    </div>
</div>

<div class="modal fade" id="modalExCidade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content bg-light">
      <div class="modal-header bg-danger">
        <h5 class="modal-title text-white" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="bg-light" id="excluiCidade">
      		<p class="texto-confirmacao text-center"></p>       
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i>  Não, cancelar.</button>
				<button type="button" id="excluirCidade" class="btn bg-danger text-white"><i class="fas fa-trash-alt"></i> Sim, excluir.</button>
			</div>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalEdCidade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content bg-light">
      <div class="modal-header bg-padrao text-white">
        <h5 class="modal-title text-white" id="exampleModalLabel"></h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
			<label for="fotoCidade" class="btn bg-padrao btn-sm mt-2">Escolher Imagem</label>
			<input type="file" accept="image/png, image/jpeg" id="fotoCidade" class="file-upload-default">
      </div>
    </div>
  </div>
</div>

<div id="modalCorteImagem" class="modal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg-padrao">
				<h5 class="modal-title">Corte e envio de foto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
			</div>
			<div class="modal-body mb-4">
				<div class="row">
					<div class="col-lg-12 text-center">
						<div id="image_demo" style="width: 100%;" class="mt-3"></div>
					</div>
					<div class="col-lg-6 text-right">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					</div>
					<div class="col-lg-6 text-left">
						<button class="btn btn-success" id="cortarImagem">Cortar e Enviar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>