<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
    <a class="navbar-brand brand-logo" href="<?=URL_BASE?>painel/">
      <img src="<?=URL_BASE?>assets/admin/images/logo-colorida.png" alt="logo" />
    </a>
    <a class="navbar-brand brand-logo-mini" href="<?=URL_BASE?>painel/">
      <img src="<?=URL_BASE?>assets/admin/images/logo-colorida.png" alt="logo" />
    </a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center">
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown d-none d-xl-inline-block">
        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <span class="profile-text">Olá, Mike Santos !</span>
          <img class="img-xs rounded-circle" src="<?=URL_BASE?>assets/admin/images/faces/face1.jpg" alt="Profile image">
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
          <a class="dropdown-item mt-3 bg-danger text-white pt-3 pb-3" href="<?=URL_BASE?>sair/">
            Sair
          </a>
        </div>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>