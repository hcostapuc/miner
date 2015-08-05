<nav class="navbar navbar-inverse">
  <div class="container">

    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Miner</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Buscar Desenvolvedores <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
              <?php echo $this->Html->link('<i class="fa fa-github"></i> GitHub',
                ['controller' => 'BuscarDesenvolvedoresGitHub', 'action' => 'index'],
                ['escape' => false]); ?>
            </li>
            <li>
              <?php echo $this->Html->link('<i class="fa fa-stack-overflow"></i> Stack Overflow',
               ['controller' => 'BuscarDesenvolvedoresStackExchange', 'action' => 'index'],
               ['escape' => false]); ?>
            </li>
            <li>
              <?php echo $this->Html->link('<i class="fa fa-linkedin"></i> LinkedIn',
               ['controller' => 'BuscarDesenvolvedoresLinkedIn', 'action' => 'index'],
               ['escape' => false]); ?>
             </li>
            <li role="separator" class="divider"></li>
            <li>
              <?php echo $this->Html->link('Busca Completa',
               ['controller' => 'BuscarDesenvolvedoresCompleta', 'action' => 'index']); ?>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav">
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Buscar Designers <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li>
              <?php echo $this->Html->link('<i class="fa fa-behance"></i> Behance',
               ['controller' => 'BuscarDesignersBehance', 'action' => 'index'],
               ['escape' => false]); ?>
            </li>
            <li>
              <?php echo $this->Html->link('<i class="fa fa-dribbble"></i> Dribbble',
               ['controller' => 'BuscarDesignersDribbble', 'action' => 'index'],
               ['escape' => false]); ?>
            </li>
            <li>
              <?php echo $this->Html->link('<i class="fa fa-linkedin"></i> LinkedIn',
               ['controller' => 'BuscarDesignersLinkedIn', 'action' => 'index'],
               ['escape' => false]); ?>
            </li>
            <li role="separator" class="divider"></li>
            <li>
              <?php echo $this->Html->link('Busca Completa',
               ['controller' => 'BuscarDesignersCompleta', 'action' => 'index']); ?>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <?php echo $this->Html->link('Cadastre-se',
            ['controller' => 'Users', 'action' => 'add']); ?>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Miner User <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#"><i class="fa fa-user"></i> Perfil</a></li>
            <li><a href="#"><i class="fa fa-cog"></i> Configurações</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#"><i class="fa fa-sign-out"></i> Sair</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container -->
</nav>
