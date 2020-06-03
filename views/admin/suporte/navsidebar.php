<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile pt-5">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="<?=URL_BASE?>assets/admin/images/faces/face1.jpg" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name">Mike Santos</p>
            <div>
              <small class="designation text-muted">Administrador</small>
              <span class="status-indicator online"></span>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item <?=($this->titulo == "Painel de Controle") ? 'active' : ''?>">
      <a class="nav-link" href="<?=URL_BASE?>painel/">
        <i class="menu-icon mdi mdi-television"></i>
        <span class="menu-title">Painel de Controle</span>
      </a>
    </li>
    <li class="nav-item <?=($this->titulo == "Cidades") ? 'active' : ''?>">
      <a class="nav-link" href="<?=URL_BASE?>cidades/">
        <i class="menu-icon mdi mdi-city"></i>
        <span class="menu-title">Cidades</span>
      </a>
    </li>
    <li class="nav-item <?=($this->titulo == "Características") ? 'active' : ''?>">
      <a class="nav-link" href="<?=URL_BASE?>caracteristicas/">
        <i class="menu-icon mdi mdi-checkbox-marked"></i>
        <span class="menu-title">Características</span>
      </a>
    </li>
    <li class="nav-item <?=($this->titulo == "Propriedades" || $this->titulo == "Nova Propriedade" || $this->titulo == "Oferta Especial") ? 'active' : ''?>">
      <a class="nav-link" data-toggle="collapse" href="#propriedades" aria-expanded="false" aria-controls="propriedades">
        <i class="menu-icon mdi mdi-home"></i>
        <span class="menu-title">Propriedades</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="propriedades">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item <?=($this->titulo == "Propriedades") ? 'active' : ''?>">
            <a class="nav-link" href="<?=URL_BASE?>propriedades/">
              <i class="menu-icon mdi mdi-home"></i>
              <span class="menu-title">Todas</span>
            </a>
          </li>
          <li class="nav-item <?=($this->titulo == "Nova Propriedade") ? 'active' : ''?>">
            <a class="nav-link" href="<?=URL_BASE?>nova-propriedade/">
              <i class="menu-icon mdi mdi-plus"></i>
              <span class="menu-title"> Nova Propriedade</span>
            </a>
          </li>
          <li class="nav-item <?=($this->titulo == "Oferta Especial") ? 'active' : ''?>">
            <a class="nav-link" href="<?=URL_BASE?>oferta-especial/">
              <i class="menu-icon mdi mdi-tag"></i>
              <span class="menu-title">Oferta Especial</span>
            </a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item <?=($this->titulo == "Corretores") ? 'active' : ''?>">
      <a class="nav-link" href="<?=URL_BASE?>corretores/">
        <i class="menu-icon mdi mdi-briefcase"></i>
        <span class="menu-title">Corretores</span>
      </a>
    </li>
    <li class="nav-item <?=($this->titulo == "Serviços") ? 'active' : ''?>">
      <a class="nav-link" href="<?=URL_BASE?>servicos/">
        <i class="menu-icon mdi mdi-settings"></i>
        <span class="menu-title">Serviços</span>
      </a>
    </li>
    <li class="nav-item <?=($this->titulo == "Postagens" || $this->titulo == "Nova Postagem") ? 'active' : ''?>">
      <a class="nav-link" data-toggle="collapse" href="#Blog" aria-expanded="false" aria-controls="Blog">
        <i class="menu-icon mdi mdi-newspaper"></i>
        <span class="menu-title">Blog</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="Blog">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item <?=($this->titulo == "Postagens") ? 'active' : ''?>">
            <a class="nav-link" href="<?=URL_BASE?>postagens/">
              <i class="menu-icon mdi mdi-home"></i>
              <span class="menu-title">Postagens</span>
            </a>
          </li>
          <li class="nav-item <?=($this->titulo == "Nova Postagem") ? 'active' : ''?>">
            <a class="nav-link" href="<?=URL_BASE?>nova-postagem/">
              <i class="menu-icon mdi mdi-plus"></i>
              <span class="menu-title"> Nova Postagem</span>
            </a>
          </li>
        </ul>
      </div>
    </li>
    <li class="nav-item <?=($this->titulo == "Comentários") ? 'active' : ''?>">
      <a class="nav-link" href="<?=URL_BASE?>comentarios/">
        <i class="menu-icon mdi mdi-comment"></i>
        <span class="menu-title">Comentários</span>
      </a>
    </li>
  </ul>
</nav>