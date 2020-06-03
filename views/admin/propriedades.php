<?php require 'suporte/header.php'; ?>
<div class="container-fluid page-body-wrapper">
	<?php require 'suporte/navsidebar.php'; ?>
	<div class="main-panel">
    <div class="content-wrapper">
      <!-- Properties -->
      <div class="properties p-1">
        <div class="container pb-0 pt-5">
        <h3 class="text">Todas as Proriedades</h3>
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
              <button class="btn btn-danger">Excluir</button>
              <button class="btn bg-padrao">Editar</button>
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
              <button class="btn btn-danger">Excluir</button>
              <button class="btn bg-padrao">Editar</button>
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
              <button class="btn btn-danger">Excluir</button>
              <button class="btn bg-padrao">Editar</button>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="pagination">
                <ul>
                  <li class="active"><a href="#">01.</a></li>
                  <li><a href="#">02.</a></li>
                  <li><a href="#">03.</a></li>
                  <li><a href="#">04.</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php require 'suporte/footer.php'; ?>
  </div>
</div>