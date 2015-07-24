<div class="container">
    
	<h2 align="center">Desenvolvedores do Github</h2>
	<div class="row">	
		<div class="col-lg-4 col-lg-offset-4">
		 	<?php echo $this->Form->create(null, ['url' => ['controller' => 'BuscarDesenvolvedoresGithub',
			  'action' => 'buscaPorNome']]); ?>

				<?php echo $this->Form->input(null, 
				  	['class' => 'form-control', 'placeholder' => 'Busque por local, nome, ou liguagem...',
				  	'type' => 'text', 'id' => 'nome', 'name' => 'nome']); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4 col-lg-offset-4" align="right">	  	
				<?php echo $this->Form->button('<i class="fa fa-search"></i> Pesquisar', 
			  	['class' => 'btn btn-default']); ?>
		</div>
	</div>
		  	<?php echo $this->Form->end(); ?>
</div>