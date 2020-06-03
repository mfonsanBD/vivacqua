<?php require 'suporte/header.php'; ?>
<div class="container-fluid page-body-wrapper">
	<?php require 'suporte/navsidebar.php'; ?>
	<div class="main-panel">
        <div class="content-wrapper">
        	<h3 class="text-center mb-3"><?=$this->titulo;?></h3>
            <div class="col-md-8 offset-md-2 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                    <h4 class="card-title text-center">Informações</h4>
                    <form class="forms-sample" id="addPropriedade">
                        <div class="form-group mt-4">
                          <label for="nomePropriedade">Nome</label>
                          <input type="text" class="form-control" id="nomePropriedade" placeholder="Digite aqui o nome da propriedade...">
                        </div>
                        <div class="form-group mt-4">
                          <label for="descricaoPropriedade">Descrição</label>
                          <textarea type="text" class="form-control" id="descricaoPropriedade" placeholder="Digite aqui uma descrição da propriedade..."></textarea>
                        </div>
                        <div class="form-group mt-4">
                          <label for="valorPropriedade">Valor</label>
                          <input type="text" class="form-control" id="valorPropriedade" placeholder="Ex: 100000">
                        </div>
			            <div class="form-group mt-4">
			              <div class="form-check form-check-flat">
			                <label class="form-check-label">
			                  <input type="checkbox" class="form-check-input"> Marque esta opção se for cobrado condomínio.
			                </label>
			              </div>
			            </div>
                        <div class="form-group mt-4">
                          <label for="valorCondominio">Valor do Condomínio</label>
                          <input type="text" class="form-control" id="valorCondominio" placeholder="Ex: 100000">
                        </div>
                        <div class="row mt-4">
                        	<div class="col-md-2">
		                        <div class="form-group">
		                          <label for="qtdDeQuartos">Quantos Quartos?</label>
		                          <input type="number" class="form-control" id="qtdDeQuartos" placeholder="Ex: 3">
		                        </div>
                        	</div>
                        	<div class="col-md-2">
		                        <div class="form-group">
		                          <label for="qtsBanheiros">Quantos Banheiros?</label>
		                          <input type="number" class="form-control" id="qtsBanheiros" placeholder="Ex: 5">
		                        </div>
                        	</div>
                        	<div class="col-md-2">
		                        <div class="form-group">
		                          <label for="garagem">Vagas na Garagem?</label>
		                          <input type="number" class="form-control" id="garagem" placeholder="Ex: 2">
		                        </div>
                        	</div>
                        	<div class="col-md-2">
		                        <div class="form-group">
		                          <label for="qtdSuites">Quantas Suítes</label>
		                          <input type="number" class="form-control" id="qtdSuites" placeholder="Ex: 4">
		                        </div>
                        	</div>
                        	<div class="col-md-2">
		                        <div class="form-group">
		                          <label for="areaDoTerreno">Área do Terreno</label>
		                          <input type="number" class="form-control" id="areaDoTerreno" placeholder="Ex: 512">
		                        </div>
                        	</div>
                        	<div class="col-md-2">
		                        <div class="form-group">
		                          <label for="areaConstruida">Área Construída</label>
		                          <input type="number" class="form-control" id="areaConstruida" placeholder="Ex: 250">
		                        </div>
                        	</div>
                        </div>
                        <div class="form-group mt-4">
                          	<label>Qual o interesse desta propriedade?</label>
                          	<div class="row">
                          		<div class="col-md-3">
				                    <div class="form-group">
				                      <div class="form-radio form-radio-flat">
				                        <label class="form-check-label">
				                          <input type="radio" class="form-check-input" name="interesse" id="flatRadios1" value=""> Locação
				                        </label>
				                      </div>
				                    </div>
			                    </div>
                          		<div class="col-md-3">
				                    <div class="form-group">
				                      <div class="form-radio form-radio-flat">
				                        <label class="form-check-label">
				                          <input type="radio" class="form-check-input" name="interesse" id="flatRadios1" value=""> Venda
				                        </label>
				                      </div>
				                    </div>
			                	</div>
		                	</div>
                        </div>
                        <div class="form-group mt-4">
                          	<label>Quais as características dela?</label>
                          	<div class="row">
                          		<?php
                          			foreach ($listaCaracteristicas as $lica) :
                          		?>
                          		<div class="col-md-3">
									<div class="form-check form-check-flat">
										<label class="form-check-label">
										  <input type="checkbox" class="form-check-input" value="<?=$lica['idCaracteristicas']?>">
										  <?=$lica['nomeCaracteristicas']?>
										</label>
									</div>
								</div>
								<?php
									endforeach;
								?>
							</div>
                        </div>

                      	<h4 class="card-title text-center mt-4">Endereço</h4>

                        <div class="form-group mt-4">
                          <label for="logradouroPropriedade">Logradouro</label>
                          <input type="text" class="form-control" id="logradouroPropriedade" placeholder="Ex: Av. José Bento Ribeiro Dantas">
                        </div>
                        <div class="row mt-4">
                        	<div class="col-md-4">
		                        <div class="form-group">
		                          <label for="numeroPropriedade">Número</label>
		                          <input type="number" class="form-control" id="numeroPropriedade" placeholder="Ex: 3">
		                        </div>
                        	</div>
                        	<div class="col-md-8">
		                        <div class="form-group">
									<label for="complementoPropriedade">Complemento</label>
                          			<input type="text" class="form-control" id="complementoPropriedade" placeholder="Ex: Lote: xx Quadra: xx">
		                        </div>
                        	</div>
                        </div>
                        <div class="row mt-4">
                        	<div class="col-md-4">
		                        <div class="form-group">
		                          <label for="bairroPropriedade">Bairro</label>
		                          <input type="text" class="form-control" id="bairroPropriedade" placeholder="Ex: Centro">
		                        </div>
                        	</div>
                        	<div class="col-md-4">
		                        <div class="form-group">
									<label for="cidadePropriedade">Cidade</label>
				                    <select class="form-control" id="cidadePropriedade" name="cidade">
				                      <option selected disabled>Selecione a cidade</option>
				                      <?php
				                      	foreach ($listaCidades as $lici) :
				                      ?>
				                      	<option value="<?=$lici['idCidade'];?>"><?=$lici['nomeCidade'];?></option>
				                      <?php
				                      	endforeach;
				                      ?>
				                    </select>
		                        </div>
                        	</div>
                        	<div class="col-md-4">
		                        <div class="form-group">
									<label for="estadoPropriedade">Estado</label>
                          			<input type="text" class="form-control" id="estadoPropriedade" placeholder="Ex: Rio de Janeiro">
		                        </div>
                        	</div>
                        </div>
                        <div class="row mt-4">
                        	<div class="col-md-6">
		                        <div class="form-group">
		                          <label for="paisPropriedade">País</label>
		                          <input type="text" class="form-control" id="paisPropriedade" placeholder="Ex: Brasil">
		                        </div>
                        	</div>
                        	<div class="col-md-6">
		                        <div class="form-group">
		                          <label for="cepPropriedade">CEP</label>
		                          <input type="text" class="form-control" id="cepPropriedade" placeholder="Ex: xxxxxxxx">
		                        </div>
                        	</div>
                        </div>

                      	<h4 class="card-title text-center mt-4">Corretor Responsável</h4>

                    	<div class="col-md-8">
	                        <div class="form-group">
								<label for="corretor">Corretor</label>
			                    <select class="form-control" id="corretor">
			                      <option selected disabled>Selecione o corretor desta propriedade</option>
			                      <option>2</option>
			                      <option>3</option>
			                      <option>4</option>
			                      <option>5</option>
			                    </select>
	                        </div>
                    	</div>

                        <button type="submit" class="btn btn-success mr-2 mt-5">Adicionar</button>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8 offset-md-2 d-flex align-items-stretch grid-margin" id="formGaleria">
              <div class="row flex-grow">
                <div class="col-12">
                  <div class="card">
                    <div class="card-body">
                    <h4 class="card-title text-center">Adicionar Galeria</h4>
                    <form class="forms-sample" id="addGaleria">
                    	<div class="col-md-10 offset-md-1">
	                        <div class="form-group">
								<label for="propriedade">Propriedade</label>
			                    <select class="form-control" id="propriedade">
			                      <option selected disabled>Selecione a propriedade desta galeria</option>
			                      <option>2</option>
			                      <option>3</option>
			                      <option>4</option>
			                      <option>5</option>
			                    </select>
	                        </div>
			                <div class="form-group mt-4">
				                <label>Imagens da Galeria</label><br>
				                <input type="file" name="img[]" class="file-upload-default">
				                <div class="input-group col-xs-12">
				                  <input type="text" class="form-control file-upload-info" disabled placeholder="Selecione as para a galeria desta propriedade">
				                  <span class="input-group-append">
				                    <button class="file-upload-browse btn btn-secondary" type="button">Selecionar</button>
				                  </span>
				                </div>
			                </div>
                    	</div>
                    	<div class="col-md-10 offset-md-1" id="fotosDaGaleria"></div>

                        <button type="submit" class="btn btn-success mr-2 mt-5">Adicionar</button>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <?php require 'suporte/footer.php'; ?>
    </div>
</div>