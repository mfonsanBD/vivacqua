<?php require 'suporte/header.php'; ?>
<div class="container-fluid page-body-wrapper">
	<?php require 'suporte/navsidebar.php'; ?>
	<div class="main-panel">
        <div class="content-wrapper">
			<div class="row">
				<div class="col-lg-6 grid-margin stretch-card">
				  <div class="card">
				    <div class="card-body">
				      <h4 class="card-title">Propriedades por Interesse</h4>
				      <canvas id="doughnutChart1" style="height:250px"></canvas>
				    </div>
				  </div>
				</div>
				<div class="col-lg-6 grid-margin stretch-card">
				  <div class="card">
				    <div class="card-body">
				      <h4 class="card-title">Propriedades por Cidade</h4>
				      <canvas id="doughnutChart2" style="height:250px"></canvas>
				    </div>
				  </div>
				</div>
			</div>
        	<div class="row">
	            <div class="col-lg-12 grid-margin stretch-card">
	              <div class="card">
	                <div class="card-body">
	                  <h1 class="card-title">Propriedades Mais Visitadas</h1>
	                  <div class="table-responsive">
	                    <table class="table table-striped">
	                      <thead>
	                        <tr>
	                          <th>
	                            Propriedade
	                          </th>
	                          <th>
	                            Quantidade de Visitas
	                          </th>
	                        </tr>
	                      </thead>
	                      <tbody>
	                        <tr>
	                          <td class="py-1">
	                            /
	                          </td>
	                          <td>
	                            10
	                          </td>
	                        </tr>
	                        <tr>
	                          <td class="py-1">
	                            /casa-01/
	                          </td>
	                          <td>
	                            30
	                          </td>
	                        </tr>
	                        <tr>
	                          <td class="py-1">
	                            /casa-02/
	                          </td>
	                          <td>
	                            50
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