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
	                      <h4 class="card-title">Adicionar nova Postagem</h4>
	                      <form class="forms-sample">
	                        <div class="form-group mt-4">
	                          <label for="tituloPost">Título</label>
	                          <input type="text" class="form-control" id="tituloPost" placeholder="Ex: Quais as tendências das casa para 2020?">
	                        </div>
	                        <div class="form-group mt-4">
	                          <label for="texto">Texto</label>
	                          <textarea type="text" class="form-control" id="texto" placeholder="Ex: Digite o texto completo de acordo com o título acima."></textarea>
	                        </div>
			                <div class="form-group mt-4">
				                <label>Imagem de Destaque</label><br>
				                <input type="file" name="img" class="file-upload-default">
				                <div class="input-group col-xs-12">
				                  <input type="text" class="form-control file-upload-info" disabled placeholder="Selecione a imagem da postagem...">
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
										Imagem de Destaque
									</th>
									<th>
										Data da Postagem
									</th>
									<th>
										Título
									</th>
									<th>
										Texto
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
										14/01/2020
									</td>
									<td>
										Quais as tendências das casa para 2020?
									</td>
									<td>
										<div class="col-md-6">O corretor me atendeu super bem...</div>
										
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