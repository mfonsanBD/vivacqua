<div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
  <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
    <div class="row w-100">
      <div class="col-lg-4 mx-auto">
        <div class="auto-form-wrapper">
          <form action="#">
            <div class="form-group">
              <label class="label">E-mail</label>
              <div class="input-group">
                <input type="text" class="form-control" placeholder="E-mail">
              </div>
            </div>
            <div class="form-group">
              <label class="label">Senha</label>
              <div class="input-group">
                <input type="password" class="form-control" placeholder="*********">
              </div>
            </div>
            <div class="form-group">
              <!-- <button class="btn btn-primary submit-btn btn-block">Entrar</button> -->
              <a href="<?=URL_BASE?>painel/" class="btn btn-primary submit-btn btn-block">Entrar</a>
            </div>
            <div class="form-group d-flex justify-content-center">
              <a href="#" class="text-small forgot-password text-black">Esqueci minha senha</a>
            </div>
          </form>
        </div>
        <p class="footer-text text-center mt-3 text-white">copyright © <?=date('Y')?> <?=URL_BASE?>.<br>Todos os direitos reservados.</p>
      </div>
    </div>
  </div>
</div>