<div class="mdl-grid ">
	
	<div class="mdl-cell mdl-cell--12-col" align="center">
		<h3>Buscar desenvolvedores do Github</h3>
		
		<div class="mdl-textfield mdl-js-textfield">
		 	<?php echo $this->Form->create(null, ['url' => ['controller' => 'BuscarDesenvolvedoresGithub',
    		  'action' => 'buscarPorNome']]); ?>
    		  	
    		<?php echo $this->Form->input('nome', 
    		  	['label' => ['class' => 'mdl-textfield__label', 'text' => 'Nome'], 
    		  	'class' => 'mdl-textfield__input', 'id' => 'nome']); ?>
		</div>

		  		<?php echo $this->Form->button('<i class="material-icons">search</i>', 
		  		['class' => 'mdl-button mdl-js-button mdl-button--icon']); ?>
		  		
		  		<?php echo $this->Form->button('<i class="material-icons">close</i>', 
		  		['class' => 'mdl-button mdl-js-button mdl-button--icon', 'type' => 'reset']); ?>
		  	<?php echo $this->Form->end(); ?>
	</div>

	<div class="mdl-cell--middle mdl-cell--12-col" align="center">

		<?php foreach ($usuarios as $usuario): ?>
			<?php foreach ($usuario as $user): ?>

			<div class="mdl-cell mdl-cell--4-col">

			</div>

				<!-- developercard -->
				<div class="mdl-cell mdl-cell--4-col">
					<div class="mdl-card mdl-shadow--2dp developer-card">
						<div class="mdl-card__title mdl-card--expand">
							<h2 class="mdl-card__title-text"><?php echo $user['fullname']; ?></h2>
						</div>
						<div class="mdl-card__supporting-text">
							<b>Local: </b> <?php echo $user['location']; ?>
							<br/>
							<b><?php echo $user['followers']; ?> seguidores</b>
							<br/>
							<b><?php echo $user['public_repo_count']; ?> repoitórios</b> (públicos)
						</div>
						<div class="mdl-card__actions mdl-card--border">
							<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
								Expandir
							</a>
						</div>
					</div> 
					<!-- /developercard -->
				</div>

			<div class="mdl-cell mdl-cell--4-col">

			</div>
			<?php endforeach; ?>
		<?php endforeach; ?>
	</div>
</div>
