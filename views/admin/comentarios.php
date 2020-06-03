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
	                      <h4 class="card-title">Adicionar novo Comentário</h4>
	                      <form class="forms-sample">
	                        <div class="form-group mt-4">
	                          <label for="tituloComentario">Título</label>
	                          <input type="text" class="form-control" id="tituloComentario" placeholder="Ex: Gostei Muito">
	                        </div>
	                        <div class="form-group mt-4">
	                          <label for="comentario">Comentário</label>
	                          <textarea type="text" class="form-control" id="comentario" placeholder="Ex: O corretor me atendeu super bem, muito honesto e de confiança. Indico com certeza."></textarea>
	                        </div>
	                        <div class="form-group mt-4">
	                          <label for="nomeDoCliente">Nome do(a) Cliente</label>
	                          <input type="text" class="form-control" id="nomeDoCliente" placeholder="Ex: Maria de Carvalho">
	                        </div>
			                <div class="form-group mt-4">
				                <label>Foto do(a) Cliente</label><br>
				                <input type="file" name="img" class="file-upload-default">
				                <div class="input-group col-xs-12">
				                  <input type="text" class="form-control file-upload-info" disabled placeholder="Selecione a imagem do serviço...">
				                  <span class="input-group-append">
				                    <button class="file-upload-browse btn btn-secondary" type="button">Selecionar</button>
				                  </span>
				                </div>
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
	                	<h4 class="card-title">Comentários Cadastrados</h4>
		                  <div class="table-responsive">
		                    <table class="table table-striped">
		                      <thead>
		                        <tr>
									<th>
										Foto do Cliente
									</th>
									<th>
										Cliente
									</th>
									<th>
										Título Comentário
									</th>
									<th>
										Comentário
									</th>
									<th>
										#
									</th>
		                        </tr>
		                      </thead>
		                      <tbody>
		                        <tr>
									<td class="py-1">
										<img src="" alt="">
									</td>
									<td>
										Maria de Carvalho
									</td>
									<td>
										Gostei Muito
									</td>
									<td>
										O corretor me atendeu super bem, muito honesto e de confiança. Indico com certeza.
									</td>
									<td>
										<button class="btn btn-danger btn-sm">Excluir</button>
									</td>
		                        </tr>
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