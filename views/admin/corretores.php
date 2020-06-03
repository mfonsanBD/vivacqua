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
		                    <h4 class="card-title">Adicionar novo Corretor</h4>
		                    <form class="forms-sample" id="addCorretor">
		                        <div class="form-group mt-4">
		                          <label for="nomeCorretor">Nome</label>
		                          <input type="text" class="form-control" id="nomeCorretor" placeholder="Ex: José Carlos da Silva">
		                        </div>
		                        <div class="form-group mt-4">
		                          <label for="telefoneCorretor">Telefone</label>
		                          <input type="email" class="form-control" id="telefoneCorretor" placeholder="Ex: 229xxxxxxxx">
		                        </div>
		                        <div class="form-group mt-4">
		                          	<label>Sexo</label>
		                          	<div class="row">
		                          		<div class="col-md-4">
						                    <div class="form-group">
						                      <div class="form-radio form-radio-flat">
						                        <label class="form-check-label">
						                          <input type="radio" class="form-check-input" name="sexo" id="sexo" value="m"> Masculino
						                        </label>
						                      </div>
						                    </div>
					                    </div>
		                          		<div class="col-md-4">
						                    <div class="form-group">
						                      <div class="form-radio form-radio-flat">
						                        <label class="form-check-label">
						                          <input type="radio" class="form-check-input" name="sexo" id="sexo" value="f"> Feminino
						                        </label>
						                      </div>
						                    </div>
					                	</div>
				                	</div>
		                        </div>
				                <div class="form-group mt-4">
					                <label>Foto</label><br>
					                <input type="file" name="img" class="file-upload-default">
					                <div class="input-group col-xs-12">
					                  <input type="text" class="form-control file-upload-info" disabled placeholder="Selecione uma foto para este(a) corretor(a)">
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
	                	<h4 class="card-title">Corretores Cadastrados</h4>
		                  <div class="table-responsive">
		                    <table class="table table-striped">
		                      <thead>
		                        <tr>
		                          <th>
		                            Foto
		                          </th>
		                          <th>
		                            Corretor(a)
		                          </th>
		                          <th>
		                            Telefone
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
		                            José Carlos da Silva
		                          </td>
		                          <td>
		                            (22) 90000-0000
		                          </td>
		                          <td>
	              					<button class="btn btn-danger btn-sm">Excluir</button>
		                          </td>
		                        </tr>
		                        <tr>
		                          <td class="py-1">
		                            <img src="" alt="">
		                          </td>
		                          <td>
		                            José Carlos da Silva
		                          </td>
		                          <td>
		                            (22) 90000-0000
		                          </td>
		                          <td>
	              					<button class="btn btn-danger btn-sm">Excluir</button>
		                          </td>
		                        </tr>
		                        <tr>
		                          <td class="py-1">
		                            <img src="" alt="">
		                          </td>
		                          <td>
		                            José Carlos da Silva
		                          </td>
		                          <td>
		                            (22) 90000-0000
		                          </td>
		                          <td>
	              					<button class="btn btn-danger btn-sm">Excluir</button>
		                          </td>
		                        </tr>
		                        <tr>
		                          <td class="py-1">
		                            <img src="" alt="">
		                          </td>
		                          <td>
		                            José Carlos da Silva
		                          </td>
		                          <td>
		                            (22) 90000-0000
		                          </td>
		                          <td>
	              					<button class="btn btn-danger btn-sm">Excluir</button>
		                          </td>
		                        </tr>
		                        <tr>
		                          <td class="py-1">
		                            <img src="" alt="">
		                          </td>
		                          <td>
		                            José Carlos da Silva
		                          </td>
		                          <td>
		                            (22) 90000-0000
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