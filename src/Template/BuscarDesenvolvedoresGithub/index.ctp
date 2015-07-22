<div class="mdl-grid ">
	<div class="mdl-cell mdl-cell--12-col" align="center">
		<h3>Buscar desenvolvedores do Github</h3>
		
		<div class="mdl-textfield mdl-js-textfield">
		 	<?php echo $this->Form->create(null, ['url' => ['controller' => 'BuscarDesenvolvedoresGithub',
    		  'action' => 'buscarPorLocal']]); ?>
    		  	
    		<?php echo $this->Form->input('local', 
    		  	['label' => ['class' => 'mdl-textfield__label', 'text' => 'Local'], 
    		  	'class' => 'mdl-textfield__input', 'id' => 'local']); ?>
		</div>

		  		<?php echo $this->Form->button('<i class="material-icons">search</i>', 
		  		['class' => 'mdl-button mdl-js-button mdl-button--icon']); ?>
		  		<?php echo $this->Form->button('<i class="material-icons">close</i>', 
		  		['class' => 'mdl-button mdl-js-button mdl-button--icon', 'type' => 'reset']); ?>

		  	<?php echo $this->Form->end(); ?>
	</div>
</div>