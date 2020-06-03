<?php require 'suporte/header.php'; ?>
<div class="container-fluid page-body-wrapper">
	<?php require 'suporte/navsidebar.php'; ?>
	<div class="main-panel">
        <div class="content-wrapper">
        	<h3 class="text-center mb-4"><?=$this->titulo;?></h3>
	        <div class="row">
	            <div class="col-md-6 offset-md-3 d-flex align-items-stretch grid-margin">
	              <div class="row flex-grow">
	                <div class="col-12">
	                  <div class="card">
	                    <div class="card-body">
	                      <h4 class="card-title">Adicionar nova Característica</h4>
	                      <form class="forms-sample" id="addCaracteristicas">
	                        <div class="form-group">
	                          <label for="nomeCaracteristica">Nome <i class="fa fa-asterisk asterisco text-danger"></i></label>
	                          <input type="text" class="form-control" id="nomeCaracteristica" placeholder="Ex: Churrasqueira, Piscina, Área de Serviço, etc...">
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
	                	<h4 class="card-title">Características Cadastradas</h4>
		                  <div class="table-responsive">
		                    <table class="table table-striped">
		                      <thead>
		                        <tr>
		                          <th>
		                            Característica
		                          </th>
		                          <th>
		                            #
		                          </th>
		                        </tr>
		                      </thead>
		                      <tbody>
		                      	<?php
		                      		if ($qtdCaracteristicas != 0){
		                      			foreach ($listaCaracteristicas as $caracteristica) :
		                      	?>
					                        <tr>
					                          <td class="py-1">
					                            <?=$caracteristica['nomeCaracteristicas']?>
					                          </td>
					                          <td>
				              					<button value="<?= $lu['id']; ?>" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalExCaracteristica" data-id="<?= $caracteristica['idCaracteristicas']; ?>" data-nome="<?= $caracteristica['nomeCaracteristicas'];?>" class="btn btn-danger btn-sm">Excluir</button>
					                          </td>
					                        </tr>
		                        <?php
		                        		endforeach;
		                        	}else{
		                        ?>
		                        		<tr>
		                        			<td colspan="2">
			                        			<div class="col-md-12 text-center">
			                        				Nenhuma característica cadastrada até o momento.
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

<div class="modal fade" id="modalExCaracteristica" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content bg-light">
      <div class="modal-header bg-danger">
        <h5 class="modal-title text-white" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="bg-light" id="excluiCaracteristica">
      		<p class="texto-confirmacao"></p>       
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa fa-times"></i>  Não, cancelar.</button>
				<button type="button" id="excluirCaracteristica" class="btn bg-danger text-white"><i class="fas fa-trash-alt"></i> Sim, excluir.</button>
			</div>
        </form>
      </div>
    </div>
  </div>
</div>