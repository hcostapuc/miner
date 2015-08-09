<div class="container">

    <div class="jumbotron">
      <div class="container">
        <h1><i class="fa fa-github"></i> Busca no GitHub</h1>
        <p>Busque desenvolvedores no GitHub usando filtros de localidade, linguagem, ou combine filtros para refinar sua pesquisa e encontrar desenvolvedores como um ninja!</p>
        <p>
          <?php echo $this->Html->link('Comece agora &raquo;',
              ['controller' => 'BuscarDesenvolvedoresGitHub', 'action' => 'busca'],
              ['class' => 'btn btn-primary btn-lg', 'escape' => false]); ?>
        </p>
      </div>
    </div><!--/ .jumbotron -->

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h2><i class="fa fa-map-marker"></i> Localização</h2>
          <p align="justify">
            Procure por local e encontre os melhores e mais ativos desenvolvedores de <b>qualquer lugar</b> do mundo.
            Busque por país, estado ou cidade e descubra desenvolvedores por perto.
          </p>
          <p>
            <?php echo $this->Html->link('<i class="fa fa-search"></i> Buscar',
                ['controller' => 'BuscarDesenvolvedoresGitHub', 'action' => 'busca', 'local' => 'Belo Horizonte'],
                ['class' => 'btn btn-default', 'escape' => false]); ?>
          </p>
        </div>
        <div class="col-md-4">
          <h2><i class="fa fa-code"></i> Linguagem</h2>
          <p align="justify">
            Busque por linguagem, e <b>encontre quem realmente sabe</b> usar Ruby, Java, JavaScript ou qualquer outra linguagem.
          </p>
          <br/>
          <p>
            <?php echo $this->Html->link('<i class="fa fa-search"></i> Buscar',
                ['controller' => 'BuscarDesenvolvedoresGitHub', 'action' => 'busca', 'linguagem' => true],
                ['class' => 'btn btn-default', 'escape' => false]); ?>
          </p>
       </div>
        <div class="col-md-4">
          <h2><i class="fa fa-diamond"></i> Miner</h2>
          <p align="justify">
            Seja um <b>minerador</b> de verdade! Busque por desenvolvedores em <b>todas as redes</b> (GitHub, StackOverFlow e LinkedIn)
            <b>sem limites</b> de busca. Controle listas de pessoas encontradas e muito mais!
          </p>
          <p><a class="btn btn-success" href="#" role="button">Seja um <b>miner</b></a>
          <a class="btn btn-default" href="#" role="button">Como funciona </a>
          </p>
        </div>
      </div>
    </div><!--/ .container -->

</div>
