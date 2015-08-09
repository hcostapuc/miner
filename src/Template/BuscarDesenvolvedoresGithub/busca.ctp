<div class="container">

	<h1 align="center"><i class="fa fa-github"></i> Desenvolvedores do GitHub</h1>

  <?php echo $this->Form->create(null, ['url' => ['controller' => 'BuscarDesenvolvedoresGithub',
    'action' => 'resultado']]); ?>

  <div class="row">
    <div class="col-lg-6 col-lg-offset-3">
          <?php
              $checked = (isset($_GET['linguagem'])) ? ['checked' => false] : ['checked' => true];
              echo $this->element('linguagens_checkbox', $checked);
          ?>
    </div>
  </div>
  <br/>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3">
				<?php
          $local_padrao = (isset($_GET['local'])) ? $_GET['local'] : '';
          echo $this->Form->input(null,
  				  	['class' => 'form-control', 'required' => 'true', 'autofocus' => 'true',
              'placeholder' => 'País, Estado ou Cidade', 'type' => 'text', 'id' => 'local',
              'name' => 'local','value' => $local_padrao]);
        ?>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 col-lg-offset-3" align="right">
      <?php echo $this->Html->link('<i class="fa fa-question"></i> Dicas de busca',
          ['controller' => 'BuscarDesenvolvedoresGitHub', 'action' => 'busca'],
          ['class' => 'btn btn-success', 'escape' => false]); ?>
      <?php echo $this->Form->button('<i class="fa fa-search"></i> Pesquisar',
			  	['class' => 'btn btn-primary']); ?>
		</div>
	</div>
		  	<?php echo $this->Form->end(); ?>
</div>
