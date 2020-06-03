<?php require 'suporte/header.php'; ?>
<div class="container-fluid page-body-wrapper">
	<?php require 'suporte/navsidebar.php'; ?>
	<div class="main-panel">
    <div class="content-wrapper">
      <div class="col-md-6 offset-md-3 d-flex align-items-stretch grid-margin">
        <div class="row flex-grow">
          <div class="col-12">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Propriedades com Oferta especial</h4>
                <form class="forms-sample">
                  <div class="form-group">
                    <label for="propriedade">Propriedade</label>
                    <select class="form-control" id="propriedade">
                      <option selected disabled>Selecione a Propriedade</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-success mr-2 mt-4">Adicionar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Properties -->
      <div class="properties p-1">
        <div class="container pb-0 pt-5">
          <div class="row properties_row mt-4 mb-5">
            <!-- Property -->
            <div class="col-xl-4 col-lg-6 property_col">
              <a href="property.html">
                <div class="property mb-4">
                  <div class="property_image">
                    <img src="<?=URL_BASE?>assets/images/property_1.jpg" alt="">
                    <div class="bg-padrao property_tag"><a href="#">Locação</a></div>
                  </div>
                  <div class="property_body text-center">
                    <div class="property_location">Armação dos Búzios</div>
                    <div class="property_title"><a href="property.html">Casa 01</div>
                    <div class="property_price">R$ 1.234.981</div>
                  </div>
                  <div class="property_footer d-flex flex-row align-items-center justify-content-start">
                    <div><div class="property_icon"><img src="<?=URL_BASE?>assets/images/icon_1.png" alt=""></div><span>650 M²</span></div>
                    <div><div class="property_icon"><img src="<?=URL_BASE?>assets/images/icon_2.png" alt=""></div><span>3 Quartos</span></div>
                    <div><div class="property_icon"><img src="<?=URL_BASE?>assets/images/icon_3.png" alt=""></div><span>3 Banheiros</span></div>
                  </div>
                </div>
              </a>
              <div class="text-center mt-4">
                <button class="btn btn-danger">Tirar de Oferta</button>
              </div>
            </div>

            <!-- Property -->
            <div class="col-xl-4 col-lg-6 property_col">
              <a href="property.html">
                <div class="property mb-4">
                  <div class="property_image">
                    <img src="<?=URL_BASE?>assets/images/property_2.jpg" alt="">
                    <div class="bg-success property_tag"><a href="#">Venda</a></div>
                  </div>
                  <div class="property_body text-center">
                    <div class="property_location">Cabo Frio</div>
                    <div class="property_title"><a href="property.html">Casa 02</div>
                    <div class="property_price">R$ 1.234.981</div>
                  </div>
                  <div class="property_footer d-flex flex-row align-items-center justify-content-start">
                    <div><div class="property_icon"><img src="<?=URL_BASE?>assets/images/icon_1.png" alt=""></div><span>650 M²</span></div>
                    <div><div class="property_icon"><img src="<?=URL_BASE?>assets/images/icon_2.png" alt=""></div><span>3 Quartos</span></div>
                    <div><div class="property_icon"><img src="<?=URL_BASE?>assets/images/icon_3.png" alt=""></div><span>3 Banheiros</span></div>
                  </div>
                </div>
              </a>
              <div class="text-center mt-4">
                <button class="btn btn-danger">Tirar de Oferta</button>
              </div>
            </div>

            <!-- Property -->
            <div class="col-xl-4 col-lg-6 property_col">
              <a href="property.html">
                <div class="property mb-4">
                  <div class="property_image">
                    <img src="<?=URL_BASE?>assets/images/property_3.jpg" alt="">
                    <div class="bg-success property_tag"><a href="#">Venda</a></div>
                  </div>
                  <div class="property_body text-center">
                    <div class="property_location">Arraial do Cabo</div>
                    <div class="property_title"><a href="property.html">Casa 03</div>
                    <div class="property_price">R$ 1.234.981</div>
                  </div>
                  <div class="property_footer d-flex flex-row align-items-center justify-content-start">
                    <div><div class="property_icon"><img src="<?=URL_BASE?>assets/images/icon_1.png" alt=""></div><span>650 M²</span></div>
                    <div><div class="property_icon"><img src="<?=URL_BASE?>assets/images/icon_2.png" alt=""></div><span>3 Quartos</span></div>
                    <div><div class="property_icon"><img src="<?=URL_BASE?>assets/images/icon_3.png" alt=""></div><span>3 Banheiros</span></div>
                  </div>
                </div>
              </a>
              <div class="text-center mt-4">
                <button class="btn btn-danger">Tirar de Oferta</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php require 'suporte/footer.php'; ?>
  </div>
</div>