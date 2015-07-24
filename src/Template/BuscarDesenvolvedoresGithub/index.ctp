<h3>Buscar desenvolvedores do Github</h3>

 	<?php echo $this->Form->create(null, ['url' => ['controller' => 'BuscarDesenvolvedoresGithub',
	  'action' => 'buscaPorNome']]); ?>
	  
		<?php echo $this->Form->input('nome', 
		  	['label' => ['class' => 'mdl-textfield__label', 'text' => 'Nome'], 
		  	'class' => 'mdl-textfield__input', 'id' => 'nome']); ?>

	  		<?php echo $this->Form->button('<i class="material-icons">search</i>', 
	  		['class' => 'mdl-button mdl-js-button mdl-button--icon']); ?>
	  		
	  		<?php echo $this->Form->button('<i class="material-icons">close</i>', 
	  		['class' => 'mdl-button mdl-js-button mdl-button--icon', 'type' => 'reset']); ?>
  	<?php echo $this->Form->end(); ?>